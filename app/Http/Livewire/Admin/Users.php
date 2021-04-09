<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class Users extends Component
{
    public function render()
    {
        /* return view('livewire.admin.users', [
            'users' => User::orderBy('name')->get(),
        ]); */
        /* return view('livewire.admin.users', [
            'layout' => 'layouts.master',
            'users' => User::orderBy('name')->get(),
        ]); */

        $users = User::orderBy('name')->get();
        return view('livewire.admin.users', compact('users'))
            ->layout('layouts.master');
    }
}