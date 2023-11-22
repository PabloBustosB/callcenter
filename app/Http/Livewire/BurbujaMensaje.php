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
        //array_push($this->list, array(tipo-Usuario,Mensaje,Fecha,Accion));
        // Accion 1 = Mostrar la foto del bot,
        // Accion 0 = Solo muestra la nube sin la foto del bot,
        // Accion 2 = Mostrar imagenes de los paquetes de internet,
        // Accion 3 = Mostrar imagenes de los paquetes Promocionales,
        // Accion 4 = Mostrar imagenes de los paquetes de llamadas,
        // Accion 5 = Mostrar imagenes de los paquetes de tv cable
        
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
                array_push($this->list, array('bot',"Te interesa algun paquete de internet que te ofrecemos?", date('d-m-Y h:i:s'),2));
                //$addinteraccion->guardar(date('Y-m-d'),"Solicito Informacion sobre los paquetes de internet",3,$this->idusuario);
            }
            if ($response[0] == 'InfoCombos') {
                array_push($this->list, array('bot',"Te interesa alguno de nuestros combos?", date('d-m-Y h:i:s'),3));
            }
            if ($response[0] == 'Infotvcable') {
                array_push($this->list, array('bot',"Te interesa algun paquete de televisión por cable que te ofrecemos?", date('d-m-Y h:i:s'),4));
            }
            if ($response[0] == 'Infollamadas') {
                array_push($this->list, array('bot',"Te interesa algun paquete de telefonia que te ofrecemos?", date('d-m-Y h:i:s'),5));
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
