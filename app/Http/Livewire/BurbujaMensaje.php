<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BurbujaMensaje extends Component
{
    public $list = [];
    public $msg;

    public function mount()
    {
        array_push($this->list, array('bot', 'Bienvenido a Tigo', date('d-m-Y h:i:s')));
    }

    public function enviarChat()
    {
        if ($this->msg != null) {
            array_push($this->list, array('user', $this->msg, date('d-m-Y h:i:s')));
            $this->msg = '';
        }
    }

    public function render()
    {
        return view('livewire.burbuja-mensaje');
    }
}
