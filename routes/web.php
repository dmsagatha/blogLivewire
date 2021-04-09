<?php

use App\Http\Livewire\Admin\Users;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', function () {
    return view('layouts.master');
});

Route::get('admin/usuarios', Users::class)->name('admin.users');