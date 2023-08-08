<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServicioContratado;

class ServicioContratadoController extends Controller
{
    public function registrar_servicio_contratado($id_plan_internet,$id_plan_tvcable,$id_plan_combo,$id_plan_llamadas)
    {
        ServicioContratado::create([
            'estadoservicio' => 'Activo',
            'observacion' => ' ',
            'id_plan_internet' => $id_plan_internet,
            'id_plan_tvcable' => $id_plan_tvcable,
            'id_combo_promo' => $id_plan_combo,
            'id_plan_llamada' => $id_plan_llamadas
        ]);
    }
    
}
