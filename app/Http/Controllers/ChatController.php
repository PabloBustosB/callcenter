<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chat;
use App\Models\Interaccion;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ChatController extends Controller
{
    public function guardar_chat($emisor, $mensaje, $fecha, $porcentaje)
    {
        $id_interaccion = Interaccion::max('id');

        if ($emisor != 'Asistente-Virtual') {
            $user = User::find($emisor);
            $emisor = $user->nombre;
        }
        Chat::create([
            'emisor' => $emisor,
            'mensaje' => $mensaje,
            'fecha' => $fecha,
            'porcentaje' => $porcentaje,
            'id_interaccion' => $id_interaccion
        ]);
    }

    public function get_chats(Request $request, $id)
    {
        // $chats = Chat::find($id_interaccion);
        $chats = Chat::where('id_interaccion', $id)->get();
        $datosUsuario = DB::table('view_listar_interacciones')->where('id', $id)->groupBy('id')->get();
        $datosUsuario = $datosUsuario[0];
        $fechaInicio = Carbon::parse($datosUsuario->inicio);
        $fechaFin = Carbon::parse($datosUsuario->final);
        
        // Calcula la diferencia en minutos
        $segundosDiferencia = $fechaInicio->diffInSeconds($fechaFin);
        $minutosDiferencia = 0;
        if ($segundosDiferencia > 60) {
            $minutosDiferencia = floor($segundosDiferencia / 60);
            $segundosDiferencia = floor($segundosDiferencia % 60);
        }
        return view('interaccion.show', compact('chats', 'datosUsuario','minutosDiferencia','segundosDiferencia'));
    }
}
