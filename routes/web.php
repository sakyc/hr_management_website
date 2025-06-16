<?php

use App\Livewire\AllEmployee;
use App\Livewire\Dashboard;
use App\Livewire\Header;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use App\Livewire\Test;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', Dashboard::class);

Route::get('/all-employee', AllEmployee::class);