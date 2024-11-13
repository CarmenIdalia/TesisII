import { Component, OnInit } from '@angular/core';
import { DashboardService } from '../../services/dashboard.service';
import { Router } from '@angular/router';
import { AuthService } from '../../services/auth.service';
import { Chart } from 'chart.js/auto';
import { DashboardData, VentasDiarias, Inventario, Product } from '../../interfaces/dashboard.interfaces';

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
  stockOutProducts: number = 0;
  products: Product[] = [];

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
    console.log('Iniciando carga de datos...');
    this.dashboardService.getDashboardData().subscribe({
      next: (data: DashboardData) => {
        console.log('Datos recibidos:', data);

        if (data) {
          // Limpiar gráficas existentes si las hay
          if (this.salesChart) {
            this.salesChart.destroy();
          }
          if (this.inventoryChart) {
            this.inventoryChart.destroy();
          }

          // Procesar datos
          this.salesTotal = parseFloat(data.ventas_totales?.replace(',', '') || '0');
          this.ordersToday = data.pedidos_hoy || 0;
          this.inventoryStatus = data.inventario?.niveles_stock ?
            this.countLowInventory(data.inventario.niveles_stock) : 0;

          // Crear gráficas
          if (data.ventas_diarias) {
            console.log('Creando gráfica de ventas...');
            this.createSalesChart(data.ventas_diarias);
          }

          if (data.inventario) {
            console.log('Creando gráfica de inventario...');
            this.createInventoryChart(data.inventario);
          }

          // Actualizar productos
          this.products = data.products || [];

          // Calcular productos agotados
          this.stockOutProducts = this.products.filter(p => p.quantity === 0).length;

          // Actualizar gráfica de inventario
          this.updateInventoryChart();
        }
      },
      error: (error) => {
        console.error('Error al cargar datos:', error);
        // Aquí podrías mostrar un mensaje al usuario
        if (error.status === 401) {
          this.logout();
        }
      }
    });
  }

  private countLowInventory(stocks: number[]): number {
    return stocks.filter(stock => stock < 50).length;
  }

  private createSalesChart(salesData: VentasDiarias): void {
    const ctx = document.getElementById('salesChart') as HTMLCanvasElement;
    if (!ctx) {
      console.error('No se encontró el elemento canvas para la gráfica de ventas');
      return;
    }

    this.salesChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: salesData.fechas,
        datasets: [{
          label: 'Ventas Diarias',
          data: salesData.totales.map(total => parseFloat(total)),
          borderColor: '#3880ff',
          tension: 0.1
        }]
      },
      options: {
        responsive: true,
        scales: {
          y: {
            beginAtZero: true,
            max: salesData.maximo_eje_y
          }
        }
      }
    });
  }

  private createInventoryChart(inventoryData: Inventario): void {
    const ctx = document.getElementById('inventoryChart') as HTMLCanvasElement;
    if (!ctx) {
      console.error('No se encontró el elemento canvas para la gráfica de inventario');
      return;
    }

    this.inventoryChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: inventoryData.productos,
        datasets: [
          {
            label: 'Nivel de Inventario',
            data: inventoryData.niveles_stock,
            borderWidth: 1,
            backgroundColor: function(context: any) {
              const inventory = inventoryData.niveles_stock;
              const reorderLevel = inventoryData.niveles_reorden;
              const index = context.dataIndex;

              if (inventory[index] <= reorderLevel[index]) {
                return 'rgba(255, 99, 132, 0.5)'; // Rojo
              } else if (inventory[index] <= reorderLevel[index] * 1.2) {
                return 'rgba(255, 205, 86, 0.5)'; // Amarillo
              }
              return 'rgba(75, 192, 192, 0.5)'; // Verde
            },
            borderColor: 'rgba(255, 159, 64, 1)'
          },
          {
            label: 'Nivel de Reorden',
            data: inventoryData.niveles_reorden,
            type: 'line',
            borderColor: 'rgba(255, 99, 132, 1)',
            borderDash: [5, 5],
            fill: false,
            pointRadius: 6,
            pointHoverRadius: 8
          }
        ]
      },
      options: {
        scales: {
          x: {
            beginAtZero: true
          },
          y: {
            beginAtZero: true,
            max: inventoryData.maximo_eje_y
          }
        },
        plugins: {
          tooltip: {
            callbacks: {
              label: function(context: any) {
                const datasetLabel = context.dataset.label;
                const value = context.raw;
                const index = context.dataIndex;

                if (datasetLabel === 'Nivel de Inventario') {
                  const inventory = value;
                  const reorderLevel = inventoryData.niveles_reorden[index];
                  let status = '';

                  if (inventory <= reorderLevel) {
                    status = ' ⚠️ Requiere reabastecimiento';
                  } else if (inventory <= reorderLevel * 1.2) {
                    status = ' ⚠️ Nivel bajo';
                  }

                  return [
                    `Stock actual: ${inventory}`,
                    `Nivel de reorden: ${reorderLevel}`,
                    status
                  ].filter(Boolean);
                } else {
                  return `Nivel de reorden: ${value}`;
                }
              },
              title: function(context: any) {
                return inventoryData.productos[context[0].dataIndex];
              }
            }
          }
        },
        interaction: {
          intersect: false,
          mode: 'nearest'
        }
      }
    });
  }

  private updateInventoryChart(): void {
    const ctx = document.getElementById('inventoryChart') as HTMLCanvasElement;
    const lowStockProducts = this.products
      .sort((a: Product, b: Product) => a.quantity - b.quantity)
      .slice(0, 10);

    this.inventoryChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: lowStockProducts.map((p: Product) => p.name),
        datasets: [
          {
            label: 'Stock Actual',
            data: lowStockProducts.map((p: Product) => p.quantity),
            backgroundColor: 'rgba(54, 162, 235, 0.5)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1
          },
          {
            label: 'Nivel de Reorden',
            data: lowStockProducts.map((p: Product) => p.niveles_reorden),
            backgroundColor: 'rgba(255, 99, 132, 0.5)',
            borderColor: 'rgba(255, 99, 132, 1)',
            borderWidth: 1
          }
        ]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
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
