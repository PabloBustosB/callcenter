<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Http\Controllers\AsistenteController;
use App\Http\Controllers\InteraccionController;
use App\Models\Interaccion;

class BurbujaMensaje extends Component
{
    public $list = [];
    public $msg;
    public $idusuario;
    private $asistente;

    public function __construct()
    {
        $this->asistente = new AsistenteController();
    }

    public function mount($idusuario)
    {
        array_push($this->list, array('bot','Bienvenido a Tigo', date('d-m-Y h:i:s'),1));
        $this->msg = "";
        $this->idusuario = $idusuario;
    }

    protected $listeners = ['campoActualizado'];

    public function campoActualizado($valor)
    {
        $this->msg = $valor;
        $this->enviarChat();
    }

    public function enviarChat()
    {
        if ($this->msg != null) {
            $addinteraccion = new InteraccionController();
            array_push($this->list, array('user', $this->msg, date('d-m-Y h:i:s'),1));
            $response = $this->asistente->chat($this->msg);
            array_push($this->list, array('bot', $response[0], date('d-m-Y h:i:s'),1));
            array_push($this->list, array('bot', $response[1], date('d-m-Y h:i:s'),0));
            
            if ($response[0] == 'SoporteOrdenTrabajo') {
                $addinteraccion->guardar(date('Y-m-d'),"Pidio Soporte Tecnico",2,$this->idusuario);
            }
            if ($response[0] == 'InfoInternet') {
                array_push($this->list, array('bot',"imagen", date('d-m-Y h:i:s'),0));
                $addinteraccion->guardar(date('Y-m-d'),"Solicito Informacion sobre los paquetes de internet",3,$this->idusuario);
                array_push($this->list, array('bot', "Te interesa algun paquete de internet que te ofrecemos?", date('d-m-Y h:i:s'),1));
            }
            if ($response[0] == 'ContratarInternetSuperior - yes') {
                $addinteraccion->guardar(date('Y-m-d'),"Contrato el plan Hogar WIFI Superior",1,$this->idusuario);
            }
            if ($response[0] == 'ContratarInternetIntermedio') {
                $addinteraccion->guardar(date('Y-m-d'),"Contrato el plan Hogar WIFI Intermedio",1,$this->idusuario);
            }
            if ($response[0] == 'ContratarInternetEsencial') {
                $addinteraccion->guardar(date('Y-m-d'),"Contrato el plan Hogar WIFI Esencial",1,$this->idusuario);
            }
            // if ($response[0] == 'InfoContratarInternetSuperior - yes') {
            //     $addinteraccion->guardar(date('Y-m-d'),"Solicito Informacion sobre los paquetes de internet",2,$this->idusuario);
            //     $addinteraccion->guardarenOrdenTRabajo(date('Y-m-d'),"Solicito Informacion sobre los paquetes de internet",2,$this->idusuario);
            //     $addinteraccion->pdf(clietne, tecnico,);
            // }
            $this->msg = '';
        }
    }

    public function render()
    {
        return view('livewire.burbuja-mensaje');
    }
}
