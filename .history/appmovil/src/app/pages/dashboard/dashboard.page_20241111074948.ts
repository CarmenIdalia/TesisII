import { Component, OnInit } from '@angular/core';
import { DashboardService } from '../../services/dashboard.service';
import { Router } from '@angular/router';
import { AuthService } from '../../services/auth.service';
import Chart from 'chart.js/auto';

@Component({
  selector: 'app-dashboard',
  templateUrl: './dashboard.page.html',
  styleUrls: ['./dashboard.page.scss'],
})
export class DashboardPage implements OnInit {
  salesTotal: number = 0;
  ordersToday: number = 0;
  inventoryStatus: number = 0;
  salesChart: any;
  inventoryChart: any;

  constructor(
    private dashboardService: DashboardService,
    private authService: AuthService,
    private router: Router
  ) {}

  ngOnInit() {
    this.loadDashboardData();
  }

  ionViewDidEnter() {
    // Aseguramos que las gráficas se creen cuando la vista esté completamente cargada
    this.loadDashboardData();
  }

  loadDashboardData() {
    this.dashboardService.getAllDashboardData().subscribe({
      next: (data) => {
        console.log('Dashboard Data Received:', data);
        this.salesTotal = data.salesTotal || 0;
        this.ordersToday = data.ordersToday || 0;
        this.inventoryStatus = data.inventoryStatus?.length || 0;

        // Cargar gráficas directamente con los datos recibidos
        if (data.salesDatesLabels && data.salesTotals) {
          const salesData = data.salesDatesLabels.map((date: string, index: number) => ({
            date: date,
            total: data.salesTotals[index]
          }));
          this.createSalesChart(salesData);
        }

        if (data.inventoryItems && data.inventoryLevels) {
          const inventoryData = data.inventoryItems.map((name: string, index: number) => ({
            name: name,
            quantity: data.inventoryLevels[index]
          }));
          this.createInventoryChart(inventoryData);
        }
      },
      error: (error) => {
        console.error('Error loading dashboard data:', error);
      }
    });
  }

  createSalesChart(data: any) {
    setTimeout(() => {
      const ctx = document.getElementById('salesChart') as HTMLCanvasElement;
      if (!ctx) return;

      if (this.salesChart) {
        this.salesChart.destroy();
      }

      const labels = data.map((item: any) => item.date);
      const totals = data.map((item: any) => item.total);
      const maxTotal = Math.max(...totals);
      const yAxisMax = Math.ceil(maxTotal * 1.15);

      this.salesChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: labels,
          datasets: [{
            label: 'Ventas Diarias',
            data: totals,
            borderColor: 'rgba(75, 192, 192, 1)',
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderWidth: 2,
            tension: 0.1,
            fill: true,
            pointRadius: 4,
            pointBackgroundColor: 'rgba(75, 192, 192, 1)'
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          scales: {
            x: {
              grid: {
                display: true,
                color: 'rgba(0,0,0,0.05)'
              }
            },
            y: {
              beginAtZero: true,
              max: yAxisMax,
              grid: {
                display: true,
                color: 'rgba(0,0,0,0.05)'
              },
              ticks: {
                callback: function(value) {
                  return 'S/ ' + value.toLocaleString('es-PE');
                }
              }
            }
          },
          plugins: {
            legend: {
              display: true,
              position: 'top'
            },
            tooltip: {
              callbacks: {
                label: function(context) {
                  return 'S/ ' + context.raw.toLocaleString('es-PE');
                }
              }
            }
          }
        }
      });
    }, 150);
  }

  createInventoryChart(data: any) {
    setTimeout(() => {
      const ctx = document.getElementById('inventoryChart') as HTMLCanvasElement;
      if (!ctx) return;

      if (this.inventoryChart) {
        this.inventoryChart.destroy();
      }

      const labels = data.map((item: any) => item.name);
      const quantities = data.map((item: any) => item.quantity);
      const maxQuantity = Math.max(...quantities);
      const yAxisMax = Math.ceil(maxQuantity * 1.15);

      this.inventoryChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: labels,
          datasets: [{
            label: 'Nivel de Inventario',
            data: quantities,
            backgroundColor: [
              'rgba(255, 99, 132, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(255, 206, 86, 0.2)',
              'rgba(75, 192, 192, 0.2)',
              'rgba(153, 102, 255, 0.2)'
            ],
            borderColor: [
              'rgba(255, 99, 132, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(255, 206, 86, 1)',
              'rgba(75, 192, 192, 1)',
              'rgba(153, 102, 255, 1)'
            ],
            borderWidth: 1
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          scales: {
            x: {
              grid: {
                display: false
              }
            },
            y: {
              beginAtZero: true,
              max: yAxisMax,
              grid: {
                color: 'rgba(0,0,0,0.05)'
              }
            }
          },
          plugins: {
            legend: {
              display: true,
              position: 'top'
            }
          }
        }
      });
    }, 150);
  }

  async logout() {
    // Limpiar el localStorage
    localStorage.clear();
    // O si prefieres solo eliminar el token específico:
    // localStorage.removeItem('token');

    // Navegar al login y evitar que pueda volver atrás
    this.router.navigate(['/login'], {
      replaceUrl: true
    });
  }
}
