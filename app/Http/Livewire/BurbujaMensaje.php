<?php
namespace App\Http\Livewire;

use Livewire\Component;
use App\Http\Controllers\AsistenteController;

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
            $asistente = new AsistenteController();
            $response = $asistente->chat($this->msg);
            array_push($this->list, array('bot', $response[1], date('d-m-Y h:i:s')));
            $this->msg = '';
        }
    }

    public function render()
    {
        return view('livewire.burbuja-mensaje');
    }
}
