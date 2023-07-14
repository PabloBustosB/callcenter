<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;


class AsistenteController extends Controller
{
    protected $dialogflowService;

    public function __construct(DialogflowService $dialogflowService)
    {
        $this->dialogflowService = $dialogflowService;
    }

    public function chat($texto)
    {
        $sessionId = 123456789;
        $query = $texto;

        $response = $this->dialogflowService->detectIntent($sessionId, $query);

        // Realiza alguna acción con la respuesta de Dialogflow

        return $response;
    }

    public function index()
    {
        $datos = $this->chat("mi internet falla");

        return view('asistente.index')->with('datos', $datos);
    }
}
