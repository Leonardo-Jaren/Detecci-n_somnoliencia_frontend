<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte en Tiempo Real</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div class="chart-container" style="width: 80%; margin: auto;">
        <canvas id="myChart"></canvas>
    </div>

    <script>
        const ctx = document.getElementById('myChart').getContext('2d');
        let myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [], // Etiquetas vacías, se llenarán dinámicamente
                datasets: [{
                    label: 'Micro Sleep Count',
                    data: [], // Datos vacíos, se llenarán dinámicamente
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Función para actualizar el gráfico
        async function updateChart() {
            try {
                const response = await fetch('/api/reporte/data'); // Llama al endpoint API
                const data = await response.json();

                // Actualiza las etiquetas y los datos
                myChart.data.labels = data.map(item => item.label);
                myChart.data.datasets[0].data = data.map(item => item.value);

                myChart.update(); // Actualiza el gráfico con los nuevos datos
            } catch (error) {
                console.error("Error al actualizar el gráfico:", error);
            }
        }

        // Llama a updateChart cada 5 segundos para actualizar el gráfico en tiempo real
        setInterval(updateChart, 5000);

        // Llama a updateChart una vez al cargar la página
        updateChart();
    </script>
</body>
</html>
