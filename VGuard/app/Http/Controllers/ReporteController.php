<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use League\Csv\Reader;

class ReporteController extends Controller
{
    public function showReporte()
    {
        // Ruta absoluta a tu archivo CSV
        $csvFilePath = '/ruta/a/tu_archivo.csv';

        if (file_exists($csvFilePath)) {
            $csv = Reader::createFromPath($csvFilePath, 'r');
            $csv->setHeaderOffset(0);

            $data = [];
            foreach ($csv->getRecords() as $record) {
                $data[] = [
                    'label' => $record['nombre_columna'],  // Cambia según el nombre de tu columna en CSV
                    'value' => $record['valor_columna'],   // Cambia según el nombre de tu columna en CSV
                ];
            }
        } else {
            $data = [];
        }

        return view('resumen2')->with('data', json_encode($data));
    }
}
