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

        if($selectedPeriod == 'diario')
        {
            $somnolencia = 5;
            $parpadeos = 10;
            $cabecear = 3;
            $bostezo = 7;

        } elseif ($selectedPeriod == 'semanal')
        {
            $somnolencia = 25;
            $parpadeos = 100;
            $cabecear = 30;
            $bostezo = 70;

        } elseif($selectedPeriod == 'mensual')
        {
            $somnolencia = 225;
            $parpadeos = 1000;
            $cabecear = 333;
            $bostezo = 745;
        }

        return view('reporte', compact('somnolencia', 'parpadeos', 'cabecear', 'bostezo', 'selectedPeriod'));
    }
}
