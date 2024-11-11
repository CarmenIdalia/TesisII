import { Injectable } from '@angular/core';
import { Observable, of } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class DashboardService {
  constructor() { }

  getDashboardData(): Observable<any> {
    // Datos de prueba
    return of({
      sales_total: 15000.50,
      orders_today: 25,
      inventory_status: 10
    });
  }

  getSalesData(): Observable<any> {
    // Datos de prueba para la gráfica de ventas
    return of([
      { date: '01/05', total: 1500 },
      { date: '02/05', total: 2300 },
      { date: '03/05', total: 1800 },
      { date: '04/05', total: 2100 },
      { date: '05/05', total: 2800 }
    ]);
  }

  getInventoryData(): Observable<any> {
    // Datos de prueba para la gráfica de inventario
    return of([
      { name: 'Producto A', quantity: 50 },
      { name: 'Producto B', quantity: 30 },
      { name: 'Producto C', quantity: 15 },
      { name: 'Producto D', quantity: 25 },
      { name: 'Producto E', quantity: 40 }
    ]);
  }
}
