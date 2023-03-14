<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;


class UserProfile extends Component
{
    public User $user; 
    public $name, $email, $mobile, $telegram, $address, $whatsapp, $profession, $country, $state, $city, $neighborhood, $postal_code;

    protected $rules = [
        'name' => 'max:40|min:3',
        'email' => 'email:rfc,dns',
        'mobile' => 'max:13',
        'telegram' => 'max:30',
        'address' => 'string',
        'profession' => 'string',
        'whatsapp' => 'max:13',
        'country' => 'string',
        'state' => 'string',
        'city' => 'string',
        'neighborhood' => 'string',
        'postal_code' => 'numeric'
    ];

    public function mount(User $user)
    {
        $this->user = auth()->user();
        $this->name = $this->user->name;
        $this->email = $this->user->email;
        $this->mobile = $this->user->mobile;
        $this->telegram = $this->user->telegram;
        $this->address = $this->user->address;
        $this->whatsapp = $this->user->whatsapp;
        $this->profession = $this->user->profession;
        $this->country = $this->user->country;
        $this->state = $this->user->state;
        $this->city = $this->user->city;
        $this->neighborhood = $this->user->neighborhood;
        $this->postal_code = $this->user->postal_code;
    }

    public function save()
    {
        $this->validate();

        /* if (env('IS_DEMO') && auth()->user()->id == 1) {
            return back()->with('demo', "You are in a demo version. You are not allowed to change the email for default users.");
        } */

        if (auth()->user()->email == $this->user->email) {
            auth()->user()->update([
                'name' => $this->name,
                'email' => $this->email,
                'mobile' => $this->mobile,
                'telegram' => $this->telegram,
                'address' => $this->address, 
                'whatsapp' => $this->whatsapp,
                'profession' => $this->profesion,
                'country' => $this->user->country,
                'state' => $this->user->state,
                'city' => $this->user->city,
                'neighborhood' => $this->user->neighborhood,
                'postal_code' => $this->user->postal_code
            ]);
            return back()->with('status', "{{ __('Your profile information have been successfuly saved!') }}");
        }

        /* $this->user->save();

        return back()->with('status', "Your profile information have been successfully saved!"); */
    }

    public function render()
    {
        return view('livewire.user-profile');
    }
}
