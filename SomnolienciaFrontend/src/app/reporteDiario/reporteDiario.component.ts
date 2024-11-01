import { Component } from '@angular/core';
import { RouterOutlet } from '@angular/router';
import { FormsModule } from '@angular/forms';

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

  //grafico de frecuencia diaria
  public barChartOptions = {
    responsive: true,
    scales: {
      x: {
        beginAtZero: true
      },
      y: {
        beginAtZero: true,
        ticks: {
          callback: (value: number) => `${value}s` 
        }
      }
    },
    plugins: {
      legend: {
        position: 'left'
      }
    }
  };
  
  public barChartLabels = ['0:00', '1:00', '2:00', '3:00', '4:00'];
  public barChartData = [
    { label: 'bostezos', data: [10, 20, 30, 40, 50], backgroundColor: 'blue' },
    { label: 'cabecar', data: [15, 25, 35, 45, 55], backgroundColor: 'red' },
    { label: 'frotarse los ojos', data: [12, 22, 32, 42, 52], backgroundColor: 'purple' }
  ];
  public barChartType = 'bar';


  //para actualizar las tablas
  /*public updateChart(period: string): void {
    if (period === 'diario') {
      this.barChartLabels = ['0:00', '1:00', '2:00', '3:00', '4:00'];
      this.barChartData = [
        { label: 'bostezos', data: [10, 20, 30, 40, 50], backgroundColor: 'blue' },
        { label: 'cabecar', data: [15, 25, 35, 45, 55], backgroundColor: 'red' },
        { label: 'frotarse los ojos', data: [12, 22, 32, 42, 52], backgroundColor: 'purple' }
      ];
    } else if (period === 'semanal') {
      this.barChartLabels = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes'];
      this.barChartData = [
        { label: 'bostezos', data: [30, 40, 50, 60, 70], backgroundColor: 'blue' },
        { label: 'cabecar', data: [20, 30, 40, 50, 60], backgroundColor: 'red' },
        { label: 'frotarse los ojos', data: [25, 35, 45, 55, 65], backgroundColor: 'purple' }
      ];
    } else if (period === 'mensual') {
      this.barChartLabels = ['Semana 1', 'Semana 2', 'Semana 3', 'Semana 4'];
      this.barChartData = [
        { label: 'bostezos', data: [100, 200, 300, 400], backgroundColor: 'blue' },
        { label: 'cabecar', data: [150, 250, 350, 450], backgroundColor: 'red' },
        { label: 'frotarse los ojos', data: [120, 220, 320, 420], backgroundColor: 'purple' }
      ];
    }
  }*/
}