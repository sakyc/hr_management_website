<?php

namespace App\Livewire\Auth\Page;

use Livewire\Attributes\Layout;
use Livewire\Component;

class ForgotPassword extends Component
{
    #[Layout('components.layouts.auth')]
    public function render()
    {
        return view('livewire.auth.page.forgot-password');
    }
}
