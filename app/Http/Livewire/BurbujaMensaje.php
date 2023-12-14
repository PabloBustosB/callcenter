<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
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
    public $mostrarMapa;

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
        array_push($this->list, array('bot', 'Bienvenido a Viva', date('d-m-Y H:i:s'), 1));
        //array_push($this->list, array(tipo-Usuario,Mensaje,Fecha,Accion));
        // Accion 1 = Mostrar la foto del bot,
        // Accion 0 = Solo muestra la nube sin la foto del bot,
        // Accion 2 = Mostrar imagenes de los paquetes de internet,
        // Accion 3 = Mostrar imagenes de los paquetes Promocionales,
        // Accion 4 = Mostrar imagenes de los paquetes de llamadas,
        // Accion 5 = mostrar una sola nube
        // Accion 6 = mostrar mapa
        $this->msg = "";
        $this->idusuario = $idusuario;
        $this->mostrarMapa = false;
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
            array_push($this->list, array('user', $this->msg, date('d-m-Y H:i:s'), 1));
            $response = $this->asistente->consultar_ia($this->msg);
            $porcentaje = $response[2];
            if ($porcentaje >= 0) {
                $porcentaje = ($porcentaje + 1) / 2;
            }
            $this->conversacion->guardar_chat($this->idusuario, $this->msg, date('Y-m-d H:i:s'), $porcentaje);
            if ($response[0] == 'SoporteInternet') {
                array_push($this->list, array('bot', $response[0], date('d-m-Y H:i:s'), 1));
                array_push($this->list, array('bot', $response[1], date('d-m-Y H:i:s'), 1));
                array_push($this->list, array('bot', "Puedes guiarte con la siguiente imagen", date('d-m-Y H:i:s'), 7));
                array_push($this->list, array('bot', 'Se solucionó tu problema?', date('d-m-Y H:i:s'), 0));
                $this->conversacion->guardar_chat('Asistente-Virtual', $response[1], date('Y-m-d H:i:s'), 0);
                $this->interaccion->editar_interaccion(3);
            } else {
                // Ver La intent
                array_push($this->list, array('bot', $response[0], date('d-m-Y H:i:s'), 1));
                array_push($this->list, array('bot', $response[1], date('d-m-Y H:i:s'), 1));
                $this->conversacion->guardar_chat('Asistente-Virtual', $response[1], date('Y-m-d H:i:s'), 0);
            }


            // Solicitar informacion o contratar
            if ($response[0] == 'ContratarServicio') {
                $this->interaccion->editar_interaccion(3);
            }

            if ($response[0] == 'ContratarInternet') {
                array_push($this->list, array('bot', "Te interesa algun paquete de internet que te ofrecemos?", date('d-m-Y H:i:s'), 2));
                $this->interaccion->editar_interaccion(3);
            }

            if ($response[0] == 'ContratarInternetPlanEstandar') {
                // $this->conversacion->guardar_chat('Asistente-Virtual', $response[1], date('Y-m-d H:i:s'), 0);
                array_push($this->list, array('bot', "Nombre: " . Auth::user()->nombre, date('d-m-Y H:i:s'), 5));
                array_push($this->list, array('bot', "Carnet de identidad: " . Auth::user()->cedula, date('d-m-Y H:i:s'), 5));
                array_push($this->list, array('bot', "Direccion domiciliaria: " . Auth::user()->direccion, date('d-m-Y H:i:s'), 5));
                array_push($this->list, array('bot', "Número de celular: " . Auth::user()->telefono, date('d-m-Y H:i:s'), 5));

                $this->ordenTrabajo->guardar_orden_trabajo("Instalacion Servicio plan Internet Estandar");
                array_push($this->list, array('bot', "Seleciona tu ubicacion en el mapa", date('d-m-Y H:i:s'), 6));
                $this->emit('mapaCargado');
                $this->servicioContratado->registrar_servicio_contratado("Se registra una instalación en esta dirección " . Auth::user()->direccion, 1, null, null, null);
                $this->contrato->guardar_contrato($this->idusuario, date('Y-m-d'),129);
                $this->interaccion->editar_interaccion(1);
            }

            if ($response[0] == 'ContratarInternetPlanAvanzado') {
                array_push($this->list, array('bot', "Nombre: " . Auth::user()->nombre, date('d-m-Y H:i:s'), 5));
                array_push($this->list, array('bot', "Carnet de identidad: " . Auth::user()->cedula, date('d-m-Y H:i:s'), 5));
                array_push($this->list, array('bot', "Direccion domiciliaria: " . Auth::user()->direccion, date('d-m-Y H:i:s'), 5));
                array_push($this->list, array('bot', "Número de celular: " . Auth::user()->telefono, date('d-m-Y H:i:s'), 5));

                $this->ordenTrabajo->guardar_orden_trabajo("Instalacion Servicio plan Internet Avanzado");
                array_push($this->list, array('bot', "Seleciona tu ubicacion en el mapa", date('d-m-Y H:i:s'), 6));
                $this->emit('mapaCargado');
                $this->servicioContratado->registrar_servicio_contratado("Se registra una instalación en esta dirección " . Auth::user()->direccion, 2, null, null, null);
                $this->contrato->guardar_contrato($this->idusuario, date('Y-m-d'),139);
                $this->interaccion->editar_interaccion(1);
            }

            if ($response[0] == 'ContratarInternetPlanExplora') {
                array_push($this->list, array('bot', "Nombre: " . Auth::user()->nombre, date('d-m-Y H:i:s'), 5));
                array_push($this->list, array('bot', "Carnet de identidad: " . Auth::user()->cedula, date('d-m-Y H:i:s'), 5));
                array_push($this->list, array('bot', "Direccion domiciliaria: " . Auth::user()->direccion, date('d-m-Y H:i:s'), 5));
                array_push($this->list, array('bot', "Número de celular: " . Auth::user()->telefono, date('d-m-Y H:i:s'), 5));

                $this->ordenTrabajo->guardar_orden_trabajo("Instalacion Servicio plan Internet Explora");
                array_push($this->list, array('bot', "Seleciona tu ubicacion en el mapa", date('d-m-Y H:i:s'), 6));
                $this->emit('mapaCargado');
                $this->servicioContratado->registrar_servicio_contratado("Se registra una instalación en esta dirección " . Auth::user()->direccion, 3, null, null, null);
                $this->contrato->guardar_contrato($this->idusuario, date('Y-m-d'),199);
                $this->interaccion->editar_interaccion(1);
            }

            if ($response[0] == 'ContratarInternetPlanLibre') {
                array_push($this->list, array('bot', "Nombre: " . Auth::user()->nombre, date('d-m-Y H:i:s'), 5));
                array_push($this->list, array('bot', "Carnet de identidad: " . Auth::user()->cedula, date('d-m-Y H:i:s'), 5));
                array_push($this->list, array('bot', "Direccion domiciliaria: " . Auth::user()->direccion, date('d-m-Y H:i:s'), 5));
                array_push($this->list, array('bot', "Número de celular: " . Auth::user()->telefono, date('d-m-Y H:i:s'), 5));

                $this->ordenTrabajo->guardar_orden_trabajo("Instalacion Servicio plan Internet Libre");
                array_push($this->list, array('bot', "Seleciona tu ubicacion en el mapa", date('d-m-Y H:i:s'), 6));
                $this->emit('mapaCargado');
                $this->servicioContratado->registrar_servicio_contratado("Se registra una instalación en esta dirección " . Auth::user()->direccion, 4, null, null, null);
                $this->contrato->guardar_contrato($this->idusuario, date('Y-m-d'),249);
                $this->interaccion->editar_interaccion(1);
            }


            if ($response[0] == 'ContratarPlanLlamadas') {
                array_push($this->list, array('bot', "Te interesa algun paquete de telefonia que te ofrecemos?", date('d-m-Y H:i:s'), 3));
                $this->interaccion->editar_interaccion(3);
            }

            if ($response[0] == 'ContratarPlanLlamadasBasico') {
                // $this->conversacion->guardar_chat('Asistente-Virtual', $response[1], date('Y-m-d H:i:s'), 0);
                array_push($this->list, array('bot', "Nombre: " . Auth::user()->nombre, date('d-m-Y H:i:s'), 5));
                array_push($this->list, array('bot', "Carnet de identidad: " . Auth::user()->cedula, date('d-m-Y H:i:s'), 5));
                array_push($this->list, array('bot', "Direccion domiciliaria: " . Auth::user()->direccion, date('d-m-Y H:i:s'), 5));
                array_push($this->list, array('bot', "Número de celular: " . Auth::user()->telefono, date('d-m-Y H:i:s'), 5));
                $this->servicioContratado->registrar_servicio_contratado("Se registra una instalación en esta dirección " . Auth::user()->direccion, null, null, null, 1);
                $this->contrato->guardar_contrato($this->idusuario, date('Y-m-d'),99);
                $this->interaccion->editar_interaccion(1);
            }

            if ($response[0] == 'ContratarPlanLlamadasSimple') {
                // $this->conversacion->guardar_chat('Asistente-Virtual', $response[1], date('Y-m-d H:i:s'), 0);
                array_push($this->list, array('bot', "Nombre: " . Auth::user()->nombre, date('d-m-Y H:i:s'), 5));
                array_push($this->list, array('bot', "Carnet de identidad: " . Auth::user()->cedula, date('d-m-Y H:i:s'), 5));
                array_push($this->list, array('bot', "Direccion domiciliaria: " . Auth::user()->direccion, date('d-m-Y H:i:s'), 5));
                array_push($this->list, array('bot', "Número de celular: " . Auth::user()->telefono, date('d-m-Y H:i:s'), 5));
                $this->servicioContratado->registrar_servicio_contratado("Se registra una instalación en esta dirección " . Auth::user()->direccion, null, null, null, 2);
                $this->contrato->guardar_contrato($this->idusuario, date('Y-m-d'),149);
                $this->interaccion->editar_interaccion(1);
            }

            if ($response[0] == 'ContratarPlanLlamadasPlus') {
                // $this->conversacion->guardar_chat('Asistente-Virtual', $response[1], date('Y-m-d H:i:s'), 0);
                array_push($this->list, array('bot', "Nombre: " . Auth::user()->nombre, date('d-m-Y H:i:s'), 5));
                array_push($this->list, array('bot', "Carnet de identidad: " . Auth::user()->cedula, date('d-m-Y H:i:s'), 5));
                array_push($this->list, array('bot', "Direccion domiciliaria: " . Auth::user()->direccion, date('d-m-Y H:i:s'), 5));
                array_push($this->list, array('bot', "Número de celular: " . Auth::user()->telefono, date('d-m-Y H:i:s'), 5));
                $this->servicioContratado->registrar_servicio_contratado("Se registra una instalación en esta dirección " . Auth::user()->direccion, null, null, null, 3);
                $this->contrato->guardar_contrato($this->idusuario, date('Y-m-d'),169);
                $this->interaccion->editar_interaccion(1);
            }


            // Registrar Soporte

            if ($response[0] == 'SoporteInternet - yes' || $response[0] == 'SoporteRouterConfigLTE' || $response[0] == 'SoporteRouterConfigTPLINK' || $response[0] == 'SoporteRouterLTE' || $response[0] == 'SoporteRouterTPLink' || $response[0] == 'SoporteInternet - no - yes') {
                array_push($this->list, array('bot', "Gracias por tu tiempo, puedes volver con otra consulta.", date('d-m-Y h:i:s'), 0));
                $this->interaccion->editar_interaccion("Pidio Soporte Tecnico", 4);
            }
            if ($response[0] == 'SoporteOrdenTrabajo') {
                array_push($this->list, array('bot', "Gracias por tu tiempo, puedes volver con otra consulta.", date('d-m-Y h:i:s'), 0));
                $this->interaccion->editar_interaccion("Pidio Soporte Tecnico", 4);
            }
            $this->msg = '';
        }
    }

    public function render()
    {
        return view('livewire.burbuja-mensaje');
    }
}
