<div class="chart-container">
    <canvas id="myChart"></canvas>
</div>

<script>
    // Datos en formato JSON pasados desde el controlador
    const data = @json($data);

    // Configuración de Chart.js para mostrar el gráfico de barras
    const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: data.map(item => item.label),
            datasets: [{
                label: 'Valores',
                data: data.map(item => item.value),
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
</script>
