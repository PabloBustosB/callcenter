<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;


class AsistenteController extends Controller
{
    protected $dialogflowService;

    public function __construct()
    {
        $this->dialogflowService = new DialogflowService();
    }

    public function consultar_ia($texto)
    {
        // $sessionId = mt_rand(100000000,999999999);
        $sessionId = 123456789;
        $response = $this->dialogflowService->detectIntent($sessionId, $texto);
        // Realiza alguna acción con la respuesta de Dialogflow
        return $response;
    }

    public function index()
    {
        // $datos = $this->chat("Quisiera mas informacion de sus servisios");
        $datos = "";
        return view('asistente.index')->with('datos', $datos);
    }
}
