<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\OrdenTrabajo; // Asegúrate de usar el modelo correspondiente a tus órdenes de trabajo
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\View; // Importa la clase View
use App\Models\Interaccion;

class OrdenTrabajoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
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

        return view('ordenTrabajo.index', compact('ordenes', 'ordenesPorEstado', 'contadorOrdenes', 'desde', 'hasta'));
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
