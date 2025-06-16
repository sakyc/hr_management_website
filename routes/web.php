<?php

use App\Livewire\AddEmployee;
use App\Livewire\Auth\Page\ForgotPassword;
use App\Livewire\Auth\Page\Login;

use App\Livewire\Auth\Page\Otp;

use App\Livewire\AllEmployee;
use App\Livewire\Dashboard;
use App\Livewire\Header;

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use App\Livewire\Test;
use Illuminate\Support\Facades\Route;

//auth
Route::get('/login', Login::class)->name('login');
Route::get('/forgot-password', ForgotPassword::class)->name('forgot-password');
Route::get('/otp', Otp::class)->name('otp');


Route::get('/dashboard', Dashboard::class);
Route::get('/all-employee', AllEmployee::class);


Route::get('/all-employee', AllEmployee::class);

Route::get('add-employee', AddEmployee::class);

