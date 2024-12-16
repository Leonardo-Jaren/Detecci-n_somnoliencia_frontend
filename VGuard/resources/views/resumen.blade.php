<!DOCTYPE html>
<html>
<head>
    <title>Reporte de Somnolencia</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }
        h3 {
            color: #333;
            font-size: 13px;
        }
        .chart-container {
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        canvas {
            max-width: 100%;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .summary-row {
            display: flex;
            justify-content: space-around;
            align-items: center;
            margin-top: 20px;
        }
        .summary-item {
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 18%;
        }
    </style>
</head>
<body>
    <center><h1>Reportes de Somnolencia</h1></center>

    <h3>Panel de estado</h3>

<?php

$url = resource_path("archivos/drowsiness_report.csv");

if (($archivo = fopen($url, "r")) !== false) {
    $encabezados = fgetcsv($archivo);

    $indices_columnas = [
        'eye_rub_report' => array_search("eye_rub_first_hand_report", $encabezados),
        'eye_rub_count' => array_search("eye_rub_first_hand_count", $encabezados),
        'flicker_report' => array_search("flicker_report", $encabezados),
        'flicker_count' => array_search("flicker_count", $encabezados),
        'micro_sleep_report' => array_search("micro_sleep_report", $encabezados),
        'micro_sleep_count' => array_search("micro_sleep_count", $encabezados),
        'pitch_report' => array_search("pitch_report", $encabezados),
        'pitch_count' => array_search("pitch_count", $encabezados),
        'yawn_report' => array_search("yawn_report", $encabezados),
        'yawn_count' => array_search("yawn_count", $encabezados),
        'timestamp' => array_search("timestamp", $encabezados)
    ];

    $columnas_existen = !in_array(false, $indices_columnas, true);
    if ($columnas_existen) {
        $datos_reportes = [
            'eye_rub' => ['counts' => [], 'timestamps' => []],
            'flicker' => ['counts' => [], 'timestamps' => []],
            'micro_sleep' => ['counts' => [], 'timestamps' => []],
            'pitch' => ['counts' => [], 'timestamps' => []],
            'yawn' => ['counts' => [], 'timestamps' => []]
        ];

        while (($datos = fgetcsv($archivo)) !== false) {
            foreach (['eye_rub', 'flicker', 'micro_sleep', 'pitch', 'yawn'] as $report_type) {
                if (strtolower($datos[$indices_columnas["{$report_type}_report"]]) == 'true') {
                    if (is_numeric($datos[$indices_columnas["{$report_type}_count"]])) {
                        $datos_reportes[$report_type]['counts'][] = (int)$datos[$indices_columnas["{$report_type}_count"]];
                    }
                    $datos_reportes[$report_type]['timestamps'][] = $datos[$indices_columnas['timestamp']];
                }
            }
        }

        $promedios = [];
        foreach ($datos_reportes as $report_type => $report_data) {
            $promedios[$report_type] = array_sum($report_data['counts']) / count($report_data['counts']);
        }

        echo "<div class='summary-row'>";
        foreach ($promedios as $report_type => $promedio) {
            $tipo = [
                'eye_rub' => 'Frotamientos',
                'flicker' => 'Parpadeos',
                'micro_sleep' => 'Microsueños',
                'pitch' => 'Inclinaciones',
                'yawn' => 'Bostezos'
            ][$report_type];
            echo "<div class='summary-item'><h3>Promedio de $tipo: $promedio</h3></div>";
        }
        echo "</div>";

        // Comentamos las tablas generadas
        /*
        foreach ($datos_reportes as $report_type => $report_data) {
            echo "<h3>Timestamps y " . ucfirst(str_replace('_', ' ', $report_type)) . " correspondientes:</h3>";
            echo "<table style='border: 1px solid;border-collapse: collapse;'>";
            echo "<tr><th>Timestamp</th><th>" . ucfirst(str_replace('_', ' ', $report_type)) . "</th></tr>";
            for ($i = 0; $i < count($report_data['timestamps']); $i++) {
                echo "<tr><td style='border: 1px solid black;max-width: 200px;min-width: 40px;'>{$report_data['timestamps'][$i]}</td>";
                echo "<td style='border: 1px solid black;max-width: 200px;min-width: 40px;'>{$report_data['counts'][$i]}</td></tr>";
            }
            echo "</table>";
        }
        */
    } else {
        echo "No se encontraron una o más columnas necesarias en el archivo CSV.";
    }

    fclose($archivo);
} else {
    echo "No se pudo abrir el archivo.";
}
?>

<div class="chart-container">
    <canvas id="eyeRubChart"></canvas>
</div>
<div class="chart-container">
    <canvas id="flickerChart"></canvas>
</div>
<div class="chart-container">
    <canvas id="microSleepChart"></canvas>
</div>
<div class="chart-container">
    <canvas id="pitchChart"></canvas>
</div>
<div class="chart-container">
    <canvas id="yawnChart"></canvas>
</div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const ctx = document.getElementById('GraficoFrecuenciaDiaria').getContext('2d');

            const chart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['0:00', '1:00', '2:00', '3:00', '4:00','5:00', '6:00', '7:00', '8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00',
                           '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00'],
                    datasets: [
                        {
                            label: 'Bostezo',
                            data: [30, 45, 50, 30, 10, 20, 25, 20, 35, 25, 40, 30, 15, 25, 30, 45, 50, 40, 35, 45, 30, 20, 15, 10],
                            backgroundColor: 'blue',
                        },
                        {
                            label: 'Cabecear',
                            data: [20, 35, 45, 40, 15, 10, 20, 10, 15, 20, 25, 30, 35, 40, 45, 30, 25, 20, 35, 25, 30, 15, 20, 10],
                            backgroundColor: 'red',
                        },
                        {
                            label: 'Parpadeos',
                            data: [15, 30, 35, 30, 20, 25, 15, 30, 40, 20, 25, 20, 15, 20, 25, 30, 40, 35, 25, 20, 15, 30, 25, 20],
                            backgroundColor: 'purple',
                        }
                    ]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true,
                            max: 60
                        }
                    },
                    plugins: {
                        legend: {
                            display: true,
                        },
                        title: {
                            display: true,
                            text: 'Frecuencia Diaria de Comportamientos'
                        }
                    }
                }
            });
        });
    </script>
</div>
