<?php

namespace App\Http\Controllers;

use App\Models\Ordentrabajo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\View; // Importa la clase View
use App\Models\Interaccion;
/**
 * Class OrdentrabajoController
 * @package App\Http\Controllers
 */
class OrdentrabajoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $ordentrabajos = Ordentrabajo::paginate();
        if (Auth::user()->id == 3){
            $ordenesTrabajo = Ordentrabajo::where('id_tecnico',1)->where('estado','pendiente')->get();
        }
        if (Auth::user()->id == 4){
            $ordenesTrabajo = Ordentrabajo::where('id_tecnico',2)->where('estado','pendiente')->get();
        }
        if (Auth::user()->id == 5){
            $ordenesTrabajo = Ordentrabajo::where('id_tecnico',3)->where('estado','pendiente')->get();
        }
        return view('tecnico.ordenesTrabajo', compact('ordenesTrabajo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ordentrabajo = new Ordentrabajo();
        return view('ordentrabajo.create', compact('ordentrabajo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ordentrabajo = Ordentrabajo::find($id);

        return view('ordentrabajo.show', compact('ordentrabajo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ordentrabajo = Ordentrabajo::find($id);

        return view('ordentrabajo.edit', compact('ordentrabajo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Ordentrabajo $ordentrabajo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $ordenTrabajo = OrdenTrabajo::find(OrdenTrabajo::max('id'));
        if ($ordenTrabajo){
            $ordenTrabajo->update([
                'longitud' => $request->longitud ?? '-63.181465',
                'latitud' => $request->latitud ?? '-17.783492',
            ]);
            session()->flash('success', 'Tu solicitud de contratacion fue registrada Exitosamente');
        }else{
            session()->flash('error', 'Tu solicitud de contratacion de servicio NO fue registrada');
        }
        return back();
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $ordentrabajo = Ordentrabajo::find($id)->delete();

        return redirect()->route('ordentrabajos.index')
            ->with('success', 'Ordentrabajo deleted successfully');
    }

    public function consultarOrdenesPorFecha(Request $request)
    {
        $desde = $request->input('desde');
        $hasta = $request->input('hasta');

        $ordenes = DB::table('ordenTecnico')
            ->select(DB::raw('COUNT(estado) AS contador, nombre'))
            ->whereBetween('fecha_visita', [$desde, $hasta])
            ->groupBy('nombre')
            ->get();

        // Realizar la consulta SQL para obtener las órdenes por estado
        $ordenesPorEstado = DB::table('ordenTecnico')
        ->select(DB::raw('COUNT(estado) AS contador, estado'))
        ->whereBetween('fecha_visita', [$desde, $hasta])
        ->groupBy('estado')
        ->get();

        $contadorOrdenes = DB::table('ordenTecnico')
        ->select(DB::raw('COUNT(*) AS contador'))
        ->whereBetween('fecha_visita', [$desde, $hasta])
        ->first(); // Utilizamos first() para obtener solo el primer resultado

        return view('ordenTrabajo.reporteOrdenTrabajo', compact('ordenes', 'ordenesPorEstado', 'contadorOrdenes', 'desde', 'hasta'));
    }

   public function reporteOrdenesPorFecha($desde, $hasta)
    {

        $ordenes = DB::table('ordenTecnico')
            ->select(DB::raw('COUNT(estado) AS contador, nombre'))
            ->whereBetween('fecha_visita', [$desde, $hasta])
            ->groupBy('nombre')
            ->get();

        // Realizar la consulta SQL para obtener las órdenes por estado
        $ordenesPorEstado = DB::table('ordenTecnico')
        ->select(DB::raw('COUNT(estado) AS contador, estado'))
        ->whereBetween('fecha_visita', [$desde, $hasta])
        ->groupBy('estado')
        ->get();

        $contadorOrdenes = DB::table('ordenTecnico')
        ->select(DB::raw('COUNT(*) AS contador'))
        ->whereBetween('fecha_visita', [$desde, $hasta])
        ->first(); // Utilizamos first() para obtener solo el primer resultado

// Generar el PDF utilizando la vista 'ordenTrabajo.index'
    $pdf = PDF::loadView('ordenTrabajo.index', [
        'ordenes' => $ordenes,
        'ordenesPorEstado' => $ordenesPorEstado,
        'contadorOrdenes' => $contadorOrdenes,
        'desde' => $desde,
        'hasta' => $hasta,
    ]);

    // Descargar el PDF con el nombre 'reporte_orden_trabajo.pdf'
    return $pdf->download('reporte_orden_trabajo.pdf');

        /* $pdf = Pdf::loadView('ordenTrabajo.index',['ordenes' =>$ordenes, 'ordenesPorEstado'=>$ordenesPorEstado, 'contadorOrdenes'=>$contadorOrdenes, 'desde'=>$desde, 'hasta'=>$hasta]); */
        /* return $pdf->stream(); */
        /*      */
    }
    public function guardar_orden_trabajo($problema)
    {

        OrdenTrabajo::create([
            'fecha_visita' => Carbon::now()->addDay()->toDateString(),
            'problema' => $problema,
            'resultado' => null,
            'estado' => 'pendiente',
            'descripcion' => null,
            'fecha_hora_visita_llegada' => Carbon::now()->addDay()->toDateString(),
            'fecha_hora_visita_salida' => null,
            'longitud' => 1,
            'latitud' =>1,
            'id_tecnico' => rand(1, 3),
            'id_interaccion' => Interaccion::max('id')
        ]);
    }
}
