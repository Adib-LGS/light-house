<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Light extends Component
{
    public $brightness = 10;
    
    public function render()
    {
        return view('livewire.light');
    }
}
