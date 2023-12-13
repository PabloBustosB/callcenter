<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contrato;
use App\Models\ServicioContratado;
use App\Models\User;
use App\Models\Factura;
use Illuminate\Support\Facades\DB;

class ContratoController extends Controller
{
    public function guardar_contrato($id_usuario,$fecha_inicio,$plan)
    {
        $usuario = User::find($id_usuario);
        Contrato::create([
            'fecha_inicio' => $fecha_inicio,
            'fecha_fin' => null,
            'estado' => 'Activo',
            'nombre_facturacion' => $usuario->nombre,
            'nit' => $usuario->cedula,
            'id_servicio_contratado' =>ServicioContratado::max('id'),
            'id_usuario' => $id_usuario
        ]);
        
        // $monto = ServicioContratado::find(ServicioContratado::max('id'));
        $consulta = "SELECT pi.precio FROM servicio_contratado as sc,planinternets as pi
        where sc.id_plan_internet = pi.id AND sc.id=?;";
        $monto = DB::selectOne($consulta,ServicioContratado::max('id') );

        Factura::create([
            'fecha' => $fecha_inicio,
            'monto' => $monto,
            'id_servicio_contratado' => ServicioContratado::max('id'),
        ]);
    }
}
