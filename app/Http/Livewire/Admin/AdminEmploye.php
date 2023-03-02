<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminEmploye extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-employe')->layout('layouts.admin-base');
    }
}
