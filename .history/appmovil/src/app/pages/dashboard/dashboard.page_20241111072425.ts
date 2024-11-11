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
    const ctx = document.getElementById('salesChart') as HTMLCanvasElement;
    if (this.salesChart) {
      this.salesChart.destroy();
    }
    this.salesChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: data.map((item: any) => item.date),
        datasets: [{
          label: 'Ventas Diarias',
          data: data.map((item: any) => item.total),
          borderColor: 'rgb(75, 192, 192)',
          tension: 0.1
        }]
      },
      options: {
        responsive: true,
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  }

  createInventoryChart(data: any) {
    const ctx = document.getElementById('inventoryChart') as HTMLCanvasElement;
    if (this.inventoryChart) {
      this.inventoryChart.destroy();
    }
    this.inventoryChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: data.map((item: any) => item.name),
        datasets: [{
          label: 'Nivel de Inventario',
          data: data.map((item: any) => item.quantity),
          backgroundColor: 'rgba(255, 159, 64, 0.2)',
          borderColor: 'rgb(255, 159, 64)',
          borderWidth: 1
        }]
      },
      options: {
        responsive: true,
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  }

  logout() {
    this.authService.logout().subscribe({
      next: () => {
        localStorage.removeItem('token');
        this.router.navigate(['/login']);
      },
      error: (error) => {
        console.error('Error during logout:', error);
        // Aún así, limpiamos el token y redirigimos
        localStorage.removeItem('token');
        this.router.navigate(['/login']);
      }
    });
  }
}
