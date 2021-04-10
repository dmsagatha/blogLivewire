<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class Users extends Component
{
    public $name;
    public $email;
    public $password;
    public $user_id;

    public function render()
    {
      $users = User::orderBy('id', 'desc')->get();
      return view('admin.users.index', compact('users'))
          ->layout('layouts.master');
    }

    public function store()
    {
      $this->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required',
      ]);

      User::create([
        'name' => $this->name,
        'email' => $this->email,
        'password' => $this->password,
      ]);

      $this->resetInputFields();
    }

    private function resetInputFields()
    {
      $this->name = '';
      $this->email = '';
      $this->password = '';
    }
}