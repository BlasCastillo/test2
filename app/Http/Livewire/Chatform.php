<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Chatform extends Component
{

    public $nombre;

    public function mount(){

        $this->nombre ="";

    }
    public function render()
    {
        return view('livewire.chatform');
    }
}
