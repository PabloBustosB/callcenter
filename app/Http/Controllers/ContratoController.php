<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contrato;
use App\Models\ServicioContratado;
use App\Models\User;

class ContratoController extends Controller
{
    public function guardar_contrato($id_usuario)
    {
        $usuario = User::find($id_usuario);
        Contrato::create([
            'fecha_inicio' => null,
            'fecha_fin' => null,
            'estado' => 'Activo',
            'nombre_facturacion' => $usuario->nombre,
            'nit' => $usuario->cedula,
            'id_servicio_contratado' =>ServicioContratado::max('id'),
            'id_usuario' => $id_usuario
        ]);
    }
}
