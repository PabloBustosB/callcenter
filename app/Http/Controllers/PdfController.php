<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use  PDF;
use Barryvdh\DomPDF\Facade\Pdf as PDF;

class PdfController extends Controller
{
    public function generatePdf($servicio,$plan,$precio)
    {
        $data = [
            'usuario' => Auth::user()->nombre,
            'servicio' => $servicio,
            'fecha' => date('d-m-Y'),
            'plan' => $plan,
            'precio' => $precio,
        ];

        $pdf = PDF::loadView('factura.contrato-reporte', compact('data'))->setPaper('a5');
        return $pdf->download('reporte-'.date('d-m-Y H:i:s').'.pdf');
    }
}
