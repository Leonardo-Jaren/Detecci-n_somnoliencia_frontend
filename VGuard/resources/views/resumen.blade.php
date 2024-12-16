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
    </style>
</head>
<body>
    <center><h1>Reportes de Somnolencia</h1></center>
    <h3>Panel de estado</h3>

<?php
$url = resource_path("archivos/drowsiness_report.csv");

$datos_reportes = [
    'eye_rub' => ['counts' => [], 'timestamps' => []],
    'flicker' => ['counts' => [], 'timestamps' => []],
    'micro_sleep' => ['counts' => [], 'timestamps' => []],
    'pitch' => ['counts' => [], 'timestamps' => []],
    'yawn' => ['counts' => [], 'timestamps' => []]
];

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
    // Datos desde PHP a JavaScript
    const dataReports = {
        eyeRub: {
            counts: <?php echo json_encode($datos_reportes['eye_rub']['counts']); ?>,
            timestamps: <?php echo json_encode($datos_reportes['eye_rub']['timestamps']); ?>
        },
        flicker: {
            counts: <?php echo json_encode($datos_reportes['flicker']['counts']); ?>,
            timestamps: <?php echo json_encode($datos_reportes['flicker']['timestamps']); ?>
        },
        microSleep: {
            counts: <?php echo json_encode($datos_reportes['micro_sleep']['counts']); ?>,
            timestamps: <?php echo json_encode($datos_reportes['micro_sleep']['timestamps']); ?>
        },
        pitch: {
            counts: <?php echo json_encode($datos_reportes['pitch']['counts']); ?>,
            timestamps: <?php echo json_encode($datos_reportes['pitch']['timestamps']); ?>
        },
        yawn: {
            counts: <?php echo json_encode($datos_reportes['yawn']['counts']); ?>,
            timestamps: <?php echo json_encode($datos_reportes['yawn']['timestamps']); ?>
        }
    };

    // Función para crear cada gráfico
    function crearGrafico(id, label, data, timestamps, color) {
        new Chart(document.getElementById(id).getContext('2d'), {
            type: 'bar',
            data: {
                labels: timestamps,
                datasets: [{
                    label: label,
                    data: data,
                    backgroundColor: color
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                plugins: {
                    legend: {
                        display: true
                    },
                    title: {
                        display: true,
                        text: 'Frecuencia de ' + label
                    }
                }
            }
        });
    }

    // Crear gráficos con los datos del CSV
    crearGrafico('eyeRubChart', 'Frotamientos', dataReports.eyeRub.counts, dataReports.eyeRub.timestamps, 'rgba(0, 123, 255, 0.5)');
    crearGrafico('flickerChart', 'Parpadeos', dataReports.flicker.counts, dataReports.flicker.timestamps, 'rgba(255, 99, 132, 0.5)');
    crearGrafico('microSleepChart', 'Microsueños', dataReports.microSleep.counts, dataReports.microSleep.timestamps, 'rgba(54, 162, 235, 0.5)');
    crearGrafico('pitchChart', 'Inclinaciones', dataReports.pitch.counts, dataReports.pitch.timestamps, 'rgba(75, 192, 192, 0.5)');
    crearGrafico('yawnChart', 'Bostezos', dataReports.yawn.counts, dataReports.yawn.timestamps, 'rgba(153, 102, 255, 0.5)');
</script>
</body>
</html>
