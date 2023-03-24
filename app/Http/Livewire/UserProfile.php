<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;


class UserProfile extends Component
{
    public User $user;
    public $name, $email, $mobile, $mobile_2, $telegram, $address, $whatsapp, $profession, $country, $state, $city, $neighborhood, $gender, $postal_code, $IDdocument, $coordinator;
    public $passport;
    public $pic_security_contact_name, $pic_security_contact_phone, $pic_security_contact_email;

    protected $rules = [
        'name' => 'max:40|min:3',
        'email' => 'email:rfc,dns',
        'mobile' => 'regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
        'mobile_2' => 'regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
        'telegram' => 'max:30',
        'address' => 'string',
        'profession' => 'string',
        'whatsapp' => 'regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
        'country' => 'string',
        'state' => 'string',
        'city' => 'string',
        'neighborhood' => 'string',
        'gender' => 'string',
        'postal_code' => 'numeric',
        'IDdocument' => 'string',
        'coordinator' => 'string',
        'passport' => 'string',
        'pic_security_contact_name' => 'max:40|min:3',
        'pic_security_contact_phone' => 'regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
        'pic_security_contact_email' => 'email:rfc,dns'
    ];

    public function mount(User $user)
    {
        $this->user = auth()->user();
        $this->name = $this->user->name;
        $this->email = $this->user->email;
        $this->mobile = $this->user->mobile;
        $this->mobile_2 = $this->user->mobile_2;
        $this->telegram = $this->user->telegram;
        $this->address = $this->user->address;
        $this->whatsapp = $this->user->whatsapp;
        $this->profession = $this->user->profession;
        $this->country = $this->user->country;
        $this->state = $this->user->state;
        $this->city = $this->user->city;
        $this->gender = $this->user->gender;
        $this->neighborhood = $this->user->neighborhood;
        $this->postal_code = $this->user->postal_code;
        $this->IDdocument = $this->user->IDdocument;
        $this->coordinator = $this->user->coordinator;
        $this->passport = $this->user->passport;
        $this->pic_security_contact_name = $this->user->pic_security_contact_name;
        $this->pic_security_contact_phone = $this->user->pic_security_contact_phone;
        $this->pic_security_contact_email = $this->user->pic_security_contact_email;
    }

    public function save()
    {
        $this->validate();

        /* if (env('IS_DEMO') && auth()->user()->id == 1) {
            return back()->with('demo', "You are in a demo version. You are not allowed to change the email for default users.");
        } */

        //dd($this->gender." ".$this->name);

        if (auth()->user()->email == $this->user->email) {
            auth()->user()->update([
                'name' => $this->name,
                'email' => $this->email,
                'mobile' => $this->mobile,
                'mobile_2' => $this->mobile_2,
                'telegram' => $this->telegram,
                'address' => $this->address,
                'whatsapp' => $this->whatsapp,
                'profession' => $this->profession,
                'country' => $this->country,
                'state' => $this->state,
                'city' => $this->city,
                'gender' => $this->gender,
                'neighborhood' => $this->neighborhood,
                'postal_code' => $this->postal_code,
                'IDdocument' => $this->IDdocument,
                'coordinator' => $this->coordinator,
                'passport' => $this->passport,
                'pic_security_contact_name' => $this->pic_security_contact_name,
                'pic_security_contact_phone' => $this->pic_security_contact_phone,
                'pic_security_contact_email' => $this->pic_security_contact_email
            ]);
            return back()->with('status', __('Your profile information have been successfuly saved!'));
        }

        /* $this->user->save();

        return back()->with('status', "Your profile information have been successfully saved!"); */
    }

    public function render()
    {
        return view('livewire.user-profile');
    }
}
