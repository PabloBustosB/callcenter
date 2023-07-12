<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BurbujaMensaje extends Component
{
    public $list = [];
    public $cant;
    
    public function mount()
    {
        array_push($this->list,array('bot', 'Bienvenido a Tigo'));
        array_push($this->list,array('user', 'Tengo problemas'));

        array_push($this->list,array('bot', 'Bienvenido a Tigo'));
        array_push($this->list,array('user', 'Tengo problemas'));
        $this->cant = 4;
    }

    public function enviarChat()
    {

        array_push($this->list,array('user', 'buenas beunas'));
        $this->cant++;
    }
 
    public function render()
    {
        return view('livewire.burbuja-mensaje');
    }
}
