<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrdenTrabajo;
use App\Models\Interaccion;
use Carbon\Carbon;

class OrdenTrabajoController extends Controller
{
    public function guardar_orden_trabajo($problema)
    { 
        OrdenTrabajo::create([
            'fecha_visita' => Carbon::now()->addDay()->toDateString(),
            'problema' => $problema,
            'resultado' => null,
            'estado' => 'en espera',
            'descripcion' => null,
            'fecha_hora_visita_llegada' => Carbon::now()->addDay()->toDateString(),
            'fecha_hora_visita_salida' => null,
            'id_tecnico' => 1,
            'id_interaccion' => Interaccion::max('id')
        ]);
        // return redirect()->route('asistente.index');
    }
}
