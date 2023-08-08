<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Interaccion;
use App\Models\OrdenTrabajo;
use App\Models\User;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;

class InteraccionController extends Controller
{
    public function crear_interaccion($fecha,$id_user)
    {
        Interaccion::create([
            'fecha' => $fecha,
            'descripcion' => null,
            'id_tipo_servicio_tecnico' => null,
            'id_usuario' => $id_user,
        ]);
        // return redirect()->route('asistente.index');
    }

    public function editar_interaccion($descripcion,$tipo_servicio){
        $interaccion = Interaccion::find(Interaccion::max('id'));

        if ($interaccion) {
            $interaccion->descripcion = $descripcion;
            $interaccion->id_tipo_servicio_tecnico = $tipo_servicio;
            $interaccion->save();
        }
    }

    public function pdf(){
        $fechaBusqueda = Carbon::parse(date('Y-m-d'));
        $interacciones = Interaccion::whereDate('fecha', $fechaBusqueda)->with('usuario','tipo_servicio')->get();
        // return view('asistente.pdf_soporte_internet',compact('interacciones'));
        $pdf = PDF::loadView('asistente.pdf_soporte_internet',['interacciones' =>$interacciones]);
        return $pdf->stream();
        // return $pdf->download();
    }
}
