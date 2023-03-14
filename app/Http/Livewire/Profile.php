<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;


class Profile extends Component
{
    public User $user;
    
    public function render()
    {
        return view('livewire.profile');
    }
}
