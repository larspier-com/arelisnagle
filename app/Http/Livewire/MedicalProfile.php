<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Models\HealthCondition;
use Illuminate\Support\Facades\Auth;

class MedicalProfile extends Component
{
    public User $user;

    public HealthCondition $healthcondition;

    public $name, $email, $mobile, $mobile_2, $profession, $country, $state, $city, $gender;
    public $emergency_contact_name, $emergency_contact_phone, $emergency_contact_email;
    public $is_disability, $disability, $allergies, $any_disease, $disease, $any_medicine, $medicine, $any_foodrestriction, $foodrestriction;



    protected $rules = [
        'name' => 'max:40|min:3',
        'email' => 'email:rfc,dns',
        'mobile' => 'regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
        'mobile_2' => 'regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
        'profession' => 'string',
        'country' => 'string',
        'state' => 'string',
        'city' => 'string',
        'gender' => 'string',
        'emergency_contact_name' => 'string',
        'emergency_contact_phone' => 'regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
        'emergency_contact_email' => 'email:rfc,dns',
        'is_disability' => 'boolean',
        'disability' => 'string',
        'allergies' => 'string',
        'any_disease' => 'boolean',
        'disease' => 'string',
        'any_medicine' => 'boolean',
        'medicine' => 'string',
        'any_foodrestriction' => 'boolean',
        'foodrestriction' => 'string'
    ];

    public function mount(User $user)
    {
        $this->user = Auth::user();
        $this->name = $this->user->name;
        $this->email = $this->user->email;
        $this->mobile = $this->user->mobile;
        $this->mobile_2 = $this->user->mobile_2;
        $this->profession = $this->user->profession;
        $this->country = $this->user->country;
        $this->state = $this->user->state;
        $this->city = $this->user->city;
        $this->gender = $this->user->gender;
        $this->emergency_contact_name = $this->user->emergency_contact_name;
        $this->emergency_contact_phone = $this->user->emergency_contact_phone;
        $this->emergency_contact_email = $this->user->emergency_contact_email;
        $this->is_disability = ($this->user->healthcondition->is_disability ?? false);
        $this->disability = ($this->user->healthcondition->disability ?? '');
        $this->allergies = ($this->user->healthcondition->allergies ?? '');
        $this->any_disease = ($this->user->healthcondition->any_disease ?? false);
        $this->disease = ($this->user->healthcondition->disease ?? '');
        $this->any_medicine = ($this->user->healthcondition->any_medicine ?? false);
        $this->medicine = ($this->user->healthcondition->medicine ?? '');
        $this->any_foodrestriction = ($this->user->healthcondition->any_foodrestriction ?? false);
        $this->foodrestriction = ($this->user->healthcondition->foodrestriction ?? '');
    }

    public function save()
    {
        $this->validate();

        /* if (env('IS_DEMO') && auth()->user()->id == 1) {
            return back()->with('demo', "You are in a demo version. You are not allowed to change the email for default users.");
        } */

        //dd($this->gender." ".$this->name);

        if (auth()->user()->email == $this->user->email) {
            auth()->user()->Update([
                'profession' => $this->profession,
                'country' => $this->country,
                'state' => $this->state,
                'city' => $this->city,
                'emergency_contact_name' => $this->emergency_contact_name,
                'emergency_contact_phone' => $this->emergency_contact_phone,
                'emergency_contact_email'  => $this->emergency_contact_email
            ]);
            $health = HealthCondition::updateOrCreate(
                ['user_id' =>  auth()->user()->id],
                [
                    'is_disability' => $this->is_disability,
                    'disability' => $this->disability,
                    'allergies' => $this->allergies,
                    'any_disease' => $this->any_disease,
                    'disease' => $this->disease,
                    'any_medicine' => $this->any_medicine,
                    'medicine' => $this->medicine,
                    'any_foodrestriction' => $this->any_foodrestriction,
                    'foodrestriction' => $this->foodrestriction
                ]);

            return back()->with('status', __('Your medical profile information have been successfuly saved!'));
        }

        /* $this->user->save();

        return back()->with('status', "Your profile information have been successfully saved!"); */
    }


    public function render()
    {
        return view('livewire.medical-profile');
    }
}
