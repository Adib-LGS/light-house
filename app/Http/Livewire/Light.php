<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Light extends Component
{
    public $brightness = 10;

    public function off()
    {
        $this->brightness = 0;
    }

    public function on()
    {
        $this->brightness = 100;
    }

    public function plus()
    {
        $this->brightness = min(100, $this->brightness + 10);
    }

    public function miness()
    {
        $this->brightness -= 10;
        if ($this->brightness <= 0){
            $this->brightness = 0;   
        }
        //$this->brightness = max(0, $this->brightness - 10);
    }

    public function render()
    {
        return view('livewire.light');
    }
}
