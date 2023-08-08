<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Chats; // Asegúrate de importar el modelo Chat
use Illuminate\Support\Facades\DB;

class ChatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Crea registros de ejemplo en la tabla "chat" utilizando el método DB::create
        /*Chats::create([
            'emisor' => 'Rosalyn Conroy',
            'mensaje' => 'Hola, ¿cómo estás?',
            'fecha' => '2023-08-05',
            'accion' => 'enviado',
            'id_interaccion' => 39,
        ]);

        Chats::create([
            'emisor' => 'Bot',
            'mensaje' => '¡Hola! Estoy bien, ¿y tú?',
            'fecha' => '2023-08-05',
            'accion' => 'recibido',
            'id_interaccion' => 39,
        ]);

        Chats::create([
            'emisor' => 'Rosalyn Conroy',
            'mensaje' => 'Hola, ¿cómo estás?',
            'fecha' => '2023-08-05',
            'accion' => 'enviado',
            'id_interaccion' => 39,
        ]);

        Chats::create([
            'emisor' => 'Bot',
            'mensaje' => '¡Hola! Estoy bien, ¿y tú?',
            'fecha' => '2023-08-05',
            'accion' => 'recibido',
            'id_interaccion' => 39,
        ]);*/
    }
}
