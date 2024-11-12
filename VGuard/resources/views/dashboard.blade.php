<x-app-layout>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<div class="flex flex-col items-center space-y-4 bg-gray-50 p-6 rounded-md shadow-lg">
<h2>Reporte de Frecuencia Diaria</h2>

    <div style="width: 80%; margin: auto;">
        <canvas id="GraficoFrecuenciaDiaria"></canvas>
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
</x-app-layout>
