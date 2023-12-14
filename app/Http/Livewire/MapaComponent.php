<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MapaComponent extends Component
{
    public $latitud = -17.7862900;
    public $longitud = -63.1811700;

    public function render()
    {
        return view('livewire.mapa-component');
    }
}
