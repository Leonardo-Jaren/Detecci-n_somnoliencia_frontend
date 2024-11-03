import { Component } from '@angular/core';
import { RouterOutlet } from '@angular/router';
import { FormsModule } from '@angular/forms';
import { Chart } from 'chart.js';

@Component({
  selector: 'app-reporteDiario',
  standalone: true,
  imports: [RouterOutlet, FormsModule ],
  templateUrl: './reporteDiario.component.html',
  styleUrl: './reporteDiario.component.css'
})


export class reporteDiario {
  title = 'reporteDiario';
  selectedPeriod: string = 'diario';
  somnolencia: string = '5%';
  parpadeos: string = '446667';
  cabecear: string = '67778';
  bostezo: string = '700/h';

  updateValues(): void {
    if (this.selectedPeriod === 'diario') {
      this.somnolencia = '5%';
      this.parpadeos = '446667';
      this.cabecear = '67778';
      this.bostezo = '700/h';
      
    } else if (this.selectedPeriod === 'semanal') {
      this.somnolencia = '10%';
      this.parpadeos = '3100000';
      this.cabecear = '450000';
      this.bostezo = '4900/h';
    } else if (this.selectedPeriod === 'mensual') {
      this.somnolencia = '15%';
      this.parpadeos = '12300000';
      this.cabecear = '1600000';
      this.bostezo = '21000/h';
    }
  }

// grafico de frecuencia diaria
chart: any;

ngOnInit(): void {
    this.crearGrafico();
  }

crearGrafico() {
    this.chart = new Chart("GraficoFrecuenciaDiaria", {
      type: 'bar',
      data: { //
        labels: ['0:00', '1:00', '2:00', '3:00', '4:00','6:00','8:00' /*sss*/],
        datasets: [
          {
            label: 'Bostezo',
            data: [30, 45, 50, 30, 10], 
            backgroundColor: 'blue',
          },
          {
            label: 'Cabecear',
            data: [20, 35, 45, 40, 15],
            backgroundColor: 'red',
          },
          {
            label: 'Parpadeos',
            data: [15, 30, 35, 30, 20], 
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
            display:  false,
          },
          title: {
            display: true,
          }
        }
      }
    });
  }
}