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
    this.loadCharts();
  }

  ionViewDidEnter() {
    // Aseguramos que las gráficas se creen cuando la vista esté completamente cargada
    this.loadDashboardData();
    this.loadCharts();
  }

  loadDashboardData() {
    this.dashboardService.getDashboardData().subscribe({
      next: (data) => {
        this.salesTotal = data.sales_total;
        this.ordersToday = data.orders_today;
        this.inventoryStatus = data.inventory_status;
      },
      error: (error) => {
        console.error('Error loading dashboard data:', error);
      }
    });
  }

  loadCharts() {
    // Cargar datos de ventas
    this.dashboardService.getSalesData().subscribe({
      next: (salesData) => {
        this.createSalesChart(salesData);
      },
      error: (error) => console.error('Error loading sales data:', error)
    });

    // Cargar datos de inventario
    this.dashboardService.getInventoryData().subscribe({
      next: (inventoryData) => {
        this.createInventoryChart(inventoryData);
      },
      error: (error) => console.error('Error loading inventory data:', error)
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
            fill: true
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          scales: {
            y: {
              beginAtZero: true,
              max: yAxisMax,
              ticks: {
                callback: function(value) {
                  return 'S/ ' + value;
                }
              }
            }
          },
          plugins: {
            legend: {
              display: true
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
              'rgba(255, 206, 86, 0.5)',
              'rgba(75, 192, 192, 0.5)',
              'rgba(153, 102, 255, 0.5)'
            ],
            borderWidth: 1
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: {
              display: true
            }
          },
          scales: {
            y: {
              beginAtZero: true
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
