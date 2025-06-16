<?php

namespace App\Livewire\Auth\Page;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Otp extends Component
{
    #[Layout('components.layouts.auth')]
    public $test;
    public function tust(){
        dd($this->test);
    }
    public function render()
    {
        return view('livewire.auth.page.otp');
    }
}
