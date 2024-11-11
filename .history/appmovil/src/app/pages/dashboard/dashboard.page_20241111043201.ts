import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { AuthService } from '../../services/auth.service';
import { DashboardService } from '../../services/dashboard.service';
import { ToastController } from '@ionic/angular';
import { Chart } from 'chart.js';

@Component({
  selector: 'app-dashboard',
  templateUrl: './dashboard.page.html',
  styleUrls: ['./dashboard.page.scss'],
})
export class DashboardPage implements OnInit {
  salesTotal: number = 0;
  ordersToday: number = 0;
  inventoryStatus: number = 0;
  salesData: any[] = [];
  inventoryData: any[] = [];
  salesChart: any;
  inventoryChart: any;

  constructor(
    private authService: AuthService,
    private dashboardService: DashboardService,
    private router: Router,
    private toastController: ToastController
  ) {}

  ngOnInit() {
    this.loadDashboardData();
    this.loadSalesData();
    this.loadInventoryData();
  }

  // Método para cargar datos de resumen
  loadDashboardData() {
    this.dashboardService.getDashboardData().subscribe(data => {
      this.salesTotal = data.sales_total;
      this.ordersToday = data.orders_today;
      this.inventoryStatus = data.inventory_status;
    });
  }

  // Método para cargar datos de ventas diarias
  loadSalesData() {
    this.dashboardService.getSalesData().subscribe(data => {
      this.salesData = data;
      this.createSalesChart();
    });
  }

  // Método para cargar datos de inventario
  loadInventoryData() {
    this.dashboardService.getInventoryData().subscribe(data => {
      this.inventoryData = data;
      this.createInventoryChart();
    });
  }

  // Método para crear la gráfica de Ventas Diarias
  createSalesChart() {
    const labels = this.salesData.map(item => item.date);
    const data = this.salesData.map(item => item.total);

    this.salesChart = new Chart('salesChartCanvas', {
      type: 'line',
      data: {
        labels: labels,
        datasets: [
          {
            label: 'Ventas Diarias',
            data: data,
            borderColor: 'rgba(75, 192, 192, 1)',
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderWidth: 2,
            tension: 0.1,
          },
        ],
      },
      options: {
        scales: {
          x: {
            type: 'category',
            title: {
              display: true,
              text: 'Fecha',
            },
          },
          y: {
            beginAtZero: true,
            title: {
              display: true,
              text: 'Total de Ventas',
            },
          },
        },
      },
    });
  }

  // Método para crear la gráfica de Estado de Inventario
  createInventoryChart() {
    const labels = this.inventoryData.map(item => item.name);
    const data = this.inventoryData.map(item => item.quantity);

    this.inventoryChart = new Chart('inventoryChartCanvas', {
      type: 'bar',
      data: {
        labels: labels,
        datasets: [
          {
            label: 'Nivel de Inventario',
            data: data,
            backgroundColor: 'rgba(255, 159, 64, 0.2)',
            borderColor: 'rgba(255, 159, 64, 1)',
            borderWidth: 1,
          },
        ],
      },
      options: {
        scales: {
          x: {
            title: {
              display: true,
              text: 'Producto',
            },
          },
          y: {
            beginAtZero: true,
            title: {
              display: true,
              text: 'Cantidad',
            },
          },
        },
      },
    });
  }

  // Método de logout
  async logout() {
    try {
      await this.authService.logout().subscribe(
        async () => {
          const toast = await this.toastController.create({
            message: 'Sesión cerrada exitosamente',
            duration: 2000,
            color: 'success'
          });
          await toast.present();
          this.router.navigate(['/login']);
        },
        async (error) => {
          const toast = await this.toastController.create({
            message: 'Error al cerrar sesión',
            duration: 2000,
            color: 'danger'
          });
          await toast.present();
        }
      );
    } catch (error) {
      console.error('Error:', error);
    }
  }
}
