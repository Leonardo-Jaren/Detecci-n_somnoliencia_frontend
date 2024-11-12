<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use League\Csv\Reader;

class ReporteController extends Controller
{
    public function showReporte()
    {
        // Ruta absoluta a tu archivo CSV
        $csvFilePath = base_path('drowsiness_processor/reports/august/drowsiness_report.csv');

        if (file_exists($csvFilePath)) {
            $csv = Reader::createFromPath($csvFilePath, 'r');
            $csv->setHeaderOffset(0);

            $data = [];
            foreach ($csv->getRecords() as $record) {
                $data[] = [
                    'label' => $record['timestamp'], // Cambia según tu CSV
                    'value' => $record['micro_sleep_count'], // Cambia según tu CSV
                ];
            }
        } else {
            $data = [];
        }

        return view('resumen')->with('data', json_encode($data));
    }
}
