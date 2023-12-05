<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Interaccion;
use App\Models\OrdenTrabajo;
use App\Models\User;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;
use App\Http\Livewire\ChatModal; // Importa el componente Livewire

class InteraccionController extends Controller
{

    public function index()
    {
        $satisfacciones = DB::table('vista_listar_interacciones')->orderBy('id')->get();
        return view('interaccion.index', compact('satisfacciones'));
    }
    //DELETE FROM `interaccion` WHERE descripcion = null;
    public function crear_interaccion($fecha, $id_user)
    {
        Interaccion::create([
            'fecha' => $fecha,
            'descripcion' => null,
            'id_tipo_servicio_tecnico' => null,
            'id_usuario' => $id_user,
        ]);
        // return redirect()->route('asistente.index');
    }

    public function cerrar_chat(){
        sleep(5);
        return redirect()->route('home');
    }

    public function editar_interaccion($descripcion, $tipo_servicio)
    {
        $interaccion = Interaccion::find(Interaccion::max('id'));
        $abc = $descripcion;
        $consulta = "SELECT AVG(porcentaje)*100 as porcentaje FROM `chat` WHERE id_interaccion=? and emisor != 'Asistente-Virtual'";
        $porcentaje = DB::selectOne($consulta, [Interaccion::max('id')]);
        if ($interaccion) {
            $interaccion->descripcion = $porcentaje->porcentaje .' %';
            $interaccion->id_tipo_servicio_tecnico = $tipo_servicio;
            $interaccion->save();
        }
    }

    public function pdf()
    {
        $interacciones = Interaccion::where('id', 113)->with('usuario', 'tipo_servicio')->get();
        $pdf = PDF::loadView('asistente.pdf_soporte_internet');
        $pdf->render();
        // $pdf = $pdf->loadHTML('<h1>Test</h1>');
        return $pdf->stream();
        // return $pdf->download('orden-de-Visita.pdf');
        return view('asistente.pdf_soporte_internet');
    }

    public function reporteInteraccion(Request $request)
    {
        // Obtener el año del formulario
        $ano = $request->input('ano');

        // Consulta para obtener los datos filtrados por el año
        $datos = DB::table('interaccionServicioTecnico')
            ->selectRaw("MONTHNAME(fecha) AS mes, nombre_servicio, COUNT(*) AS cantidad")
            ->whereYear('fecha', $ano)
            ->groupByRaw("MONTH(fecha), nombre_servicio")
            ->get();

        // Pasar los datos y el año a la vista 'reporte.blade.php'
        return view('asistente.reporte', compact('datos', 'ano'));
    }
}
