<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Tables extends Component
{
    public function render()
    {
        return view('livewire.tables');
    }

    public function products(){
        return view('livewire.prod');
    }
}
