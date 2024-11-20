<!DOCTYPE html>
<html>
<head>
    <title>Reporte de Somnolencia</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        canvas {
            height: 200px !important; /* Ajuste del alto */
            max-width: 100%;
        }
    </style>
</head>
<body class="bg-gray-100 font-sans">
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold text-center text-gray-800 mb-4">Reportes de Somnolencia</h1>

        <h3 class="text-lg text-gray-600 mb-4">Panel de estado</h3>

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

                echo "<div class='grid grid-cols-1 sm:grid-cols-3 gap-4'>";
                foreach ($datos_reportes as $report_type => $report_data) {
                    $tipo = [
                        'eye_rub' => 'Frotamientos',
                        'flicker' => 'Parpadeos',
                        'micro_sleep' => 'Microsueños',
                        'pitch' => 'Inclinaciones',
                        'yawn' => 'Bostezos'
                    ][$report_type];
                    echo "<div class='p-4 bg-white rounded-lg shadow'>
                        <h3 class='text-lg font-semibold text-gray-700 mb-2 text-center'>Promedio de $tipo</h3>
                        <canvas id='{$report_type}Chart'></canvas>
                    </div>";
                }
                echo "</div>";
            } else {
                echo "<p class='text-red-500'>No se encontraron una o más columnas necesarias en el archivo CSV.</p>";
            }

            fclose($archivo);
        } else {
            echo "<p class='text-red-500'>No se pudo abrir el archivo.</p>";
        }
        ?>

    </div>

    <script>
        const datosReportes = <?php echo json_encode($datos_reportes); ?>;

        const createChart = (ctx, label, data) => {
            const colors = ['rgba(75, 192, 192, 0.6)', 'rgba(255, 159, 64, 0.6)', 'rgba(153, 102, 255, 0.6)'];
            const borderColors = ['rgba(75, 192, 192, 1)', 'rgba(255, 159, 64, 1)', 'rgba(153, 102, 255, 1)'];
            const backgroundColors = data.counts.map((_, index) => colors[index % colors.length]);
            const borderColorArray = data.counts.map((_, index) => borderColors[index % borderColors.length]);

            return new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: data.timestamps,
                    datasets: [{
                        label: label,
                        data: data.counts,
                        backgroundColor: backgroundColors,
                        borderColor: borderColorArray,
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        x: {
                            title: {
                                display: true,
                                text: 'Timestamps'
                            }
                        },
                        y: {
                            title: {
                                display: true,
                                text: 'Cantidad'
                            }
                        }
                    }
                }
            });
        }

        createChart(document.getElementById('eye_rubChart'), 'Frotamientos', datosReportes.eye_rub);
        createChart(document.getElementById('flickerChart'), 'Parpadeos', datosReportes.flicker);
        createChart(document.getElementById('micro_sleepChart'), 'Microsueños', datosReportes.micro_sleep);
        createChart(document.getElementById('pitchChart'), 'Inclinaciones', datosReportes.pitch);
        createChart(document.getElementById('yawnChart'), 'Bostezos', datosReportes.yawn);
    </script>
</body>
</html>
