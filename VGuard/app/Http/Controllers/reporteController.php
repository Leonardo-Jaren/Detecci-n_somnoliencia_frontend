<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReporteController extends Controller
{
    public function mostrarReporte(Request $request)
    {
        $somnolencia = 5;
        $parpadeos = 10;
        $cabecear = 3;
        $bostezo = 7;

        $selectedPeriod = $request->input('selectedPeriod', 'diario');

        return view('reporte', compact('somnolencia', 'parpadeos', 'cabecear', 'bostezo', 'selectedPeriod'));
    }
}
