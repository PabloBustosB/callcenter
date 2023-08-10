<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chat;
use App\Models\Interaccion;
use App\Models\User;

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

    public function get_chats(Request $request, $id_interaccion) {
        // $chats = Chat::find($id_interaccion);
        $chats = Chat::where('id_interaccion', $id_interaccion)->get();
        // return $chats;C
        return view('interaccion.show', compact('chats'));
    }
}
