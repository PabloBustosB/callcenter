<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Http\Controllers\AsistenteController;
use App\Http\Controllers\InteraccionController;
use App\Http\Controllers\OrdenTrabajoController;
use App\Http\Controllers\ServicioContratadoController;
use App\Http\Controllers\ContratoController;
use App\Http\Controllers\ChatController;

class BurbujaMensaje extends Component
{
    public $list = [];
    public $msg;
    public $idusuario;
    private $asistente;
    private $interaccion;
    private $conversacion;
    private $ordenTrabajo;
    private $servicioContratado;
    private $contrato;

    public function __construct()
    {
        $this->asistente = new AsistenteController();
        $this->interaccion = new InteraccionController();
        $this->conversacion = new ChatController();
        $this->ordenTrabajo = new OrdenTrabajoController();
        $this->servicioContratado = new ServicioContratadoController();
        $this->contrato = new ContratoController();
    }

    public function mount($idusuario)
    {
        
        $this->interaccion->crear_interaccion(date('Y-m-d'), $this->idusuario);
        array_push($this->list, array('bot', 'Bienvenido a Viva', date('d-m-Y h:i:s'), 1));
        //array_push($this->list, array(tipo-Usuario,Mensaje,Fecha,Accion));
        // Accion 1 = Mostrar la foto del bot,
        // Accion 0 = Solo muestra la nube sin la foto del bot,
        // Accion 2 = Mostrar imagenes de los paquetes de internet,
        // Accion 3 = Mostrar imagenes de los paquetes Promocionales,
        // Accion 4 = Mostrar imagenes de los paquetes de llamadas,
        // Accion 5 = Mostrar imagenes de los paquetes de tv cable,
        // Acction 6 = Mostrar modal gps
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
            array_push($this->list, array('user', $this->msg, date('d-m-Y h:i:s'), 1));
            $response = $this->asistente->consultar_ia($this->msg);
            $porcentaje = $response[2];
            if ($porcentaje >= 0) {
                $porcentaje = ($porcentaje + 1) / 2;
            }
            $this->conversacion->guardar_chat($this->idusuario, $this->msg, date('Y-m-d H:i:s'), $porcentaje);
            array_push($this->list, array('bot', $response[1], date('d-m-Y h:i:s'), 1));
            $this->conversacion->guardar_chat('Asistente-Virtual', $response[1], date('Y-m-d H:i:s'), 0);
            // Registrar Soporte
            if ($response[0] == 'SoporteInternet - yes' || $response[0] == 'SoporteRouterConfigLTE' || $response[0] == 'SoporteRouterConfigTPLINK' || $response[0] == 'SoporteRouterLTE' || $response[0] == 'SoporteRouterTPLink' || $response[0] == 'SoporteInternet - no - yes') {
                array_push($this->list, array('bot', "Gracias por tu tiempo, puedes volver con otra consulta.", date('d-m-Y h:i:s'), 0));
                $this->interaccion->editar_interaccion("Pidio Soporte Tecnico", 4);
            }
            if ($response[0] == 'SoporteOrdenTrabajo') {
                array_push($this->list, array('bot', "Gracias por tu tiempo, puedes volver con otra consulta.", date('d-m-Y h:i:s'), 0));
                $this->interaccion->editar_interaccion("Pidio Soporte Tecnico", 4);
            }
            //
            if ($response[0] == 'InfoInternet') {
                array_push($this->list, array('bot', "Te interesa algun paquete de internet que te ofrecemos?", date('d-m-Y h:i:s'), 2));
                $this->interaccion->editar_interaccion("Solicito Informacion sobre los paquetes de internet", 3);
            }
            if ($response[0] == 'InfoCombos') {
                array_push($this->list, array('bot', "Este servicio se debe registrar personalmente en nuestras oficinas", date('d-m-Y h:i:s'), 3));
                array_push($this->list, array('bot', "Gracias por tu tiempo, puedes volver con otra consulta.", date('d-m-Y h:i:s'), 0));
                $this->interaccion->editar_interaccion("Solicito Informacion sobre los Combos Promocionales", 3);
            }
            if ($response[0] == 'Infotvcable') {
                array_push($this->list, array('bot', "Este servicio se debe registrar personalmente en nuestras oficinas", date('d-m-Y h:i:s'), 4));
                array_push($this->list, array('bot', "Gracias por tu tiempo, puedes volver con otra consulta.", date('d-m-Y h:i:s'), 0));
                $this->interaccion->editar_interaccion("Solicito Informacion sobre el servicio de television por cable", 3);
            }
            if ($response[0] == 'Infollamadas') {
                array_push($this->list, array('bot', "Este servicio se debe registrar personalmente en nuestras oficinas", date('d-m-Y h:i:s'), 5));
                array_push($this->list, array('bot', "Gracias por tu tiempo, puedes volver con otra consulta.", date('d-m-Y h:i:s'), 0));
                $this->interaccion->editar_interaccion("Solicito Informacion sobre los planes de telefonia", 3);
            }
            if ($response[0] == 'ContratarInternet') {
                array_push($this->list, array('bot', "Te interesa algun paquete de internet que te ofrecemos?", date('d-m-Y h:i:s'), 2));
            }
            if ($response[0] == 'ContratarInternetSuperior - yes' || $response[0] == 'InfoContratarInternetSuperior - yes') {

                $this->ordenTrabajo->guardar_orden_trabajo("Instalacion Servicio plan Hogar WIFI Superior");
                $this->servicioContratado->registrar_servicio_contratado(3, null, null, null);
                $this->contrato->guardar_contrato($this->idusuario);
                array_push($this->list, array('bot', "Gracias por tu tiempo, puedes volver con otra consulta.", date('d-m-Y h:i:s'), 0));
                $this->interaccion->editar_interaccion("Contrato el plan Hogar WIFI Superior", 1);
            }
            if ($response[0] == 'ContratarInternetIntermedio' || $response[0] == 'InfoContratarInternetIntermedio - yes') {

                $this->ordenTrabajo->guardar_orden_trabajo("Instalacion Servicio plan Hogar WIFI Intermedio");
                $this->servicioContratado->registrar_servicio_contratado(2, null, null, null);
                $this->contrato->guardar_contrato($this->idusuario);
                array_push($this->list, array('bot', "Gracias por tu tiempo, puedes volver con otra consulta.", date('d-m-Y h:i:s'), 0));
                $this->interaccion->editar_interaccion("Contrato el plan Hogar WIFI Intermedio", 1);
            }
            if ($response[0] == 'ContratarInternetEsencial' || $response[0] == 'InfoContratarInternetEsencial - yes') {

                $this->ordenTrabajo->guardar_orden_trabajo("Instalacion Servicio plan Hogar WIFI Esencial");
                $this->servicioContratado->registrar_servicio_contratado(1, null, null, null);
                $this->contrato->guardar_contrato($this->idusuario);
                array_push($this->list, array('bot', "Gracias por tu tiempo, puedes volver con otra consulta.", date('d-m-Y h:i:s'), 0));
                $this->interaccion->editar_interaccion("Contrato el plan Hogar WIFI Esencial", 1);
            }
            $this->msg = '';
        }
    }

    public function render()
    {
        return view('livewire.burbuja-mensaje');
    }
}
