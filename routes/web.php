<?php

use App\Livewire\Auth\Page\ForgotPassword;
use App\Livewire\Auth\Page\Login;
use App\Livewire\AllEmployee;
use App\Livewire\Dashboard;
use App\Livewire\Header;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use App\Livewire\Test;
use Illuminate\Support\Facades\Route;

Route::get('/login', Login::class)->name('login');
Route::get('/forgot-password', ForgotPassword::class)->name('forgot-password');

Route::get('/dashboard', Dashboard::class);

Route::get('/all-employee', AllEmployee::class);