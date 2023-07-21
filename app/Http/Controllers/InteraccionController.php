<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Interaccion;
use App\Models\User;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;

class InteraccionController extends Controller
{
    public function index(){

    }

    public function guardar($fecha,$desc,$id_tipo,$id_user)
    {
        Interaccion::create([
            'fecha' => $fecha,
            'descripcion' => $desc,
            'id_tipo_servicio_tecnico' => $id_tipo,
            'id_usuario' => $id_user,
        ]);
        return redirect()->route('asistente.index');
    }

    public function pdf(){
        $fechaBusqueda = Carbon::parse(date('Y-m-d'));
        $interacciones = Interaccion::whereDate('fecha', $fechaBusqueda)->with('usuario','tipo_servicio')->get();
        // return view('asistente.pdf_soporte_internet',compact('interacciones'));
        $pdf = PDF::loadView('asistente.pdf_soporte_internet',['interacciones' =>$interacciones]);
        // return $pdf->stream();
        return $pdf->download();
    }
}
