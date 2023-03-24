<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class FilesUploaded extends Component
{
    public User $user;

    public function mount(User $user)
    {
        $this->user = auth()->user();
    }


    public function render()
    {
        return view('livewire.files-uploaded');
    }
}
