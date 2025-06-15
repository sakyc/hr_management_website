<?php

namespace App\Livewire\Auth\Page;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Login extends Component
{
    #[Layout('components.layouts.auth')]
    public $showPassword = false;
    public function  passwordShow(){
        $this->showPassword = !$this->showPassword;
    }
    public function render()
    {
        return view('livewire.auth.page.login');
    }
}
