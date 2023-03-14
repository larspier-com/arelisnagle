<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UserManagement extends Component
{
    public User $user;
    
    public function render()
    {
        $users=User::all();
        return view('livewire.user-management', compact('users'));
    }
}
