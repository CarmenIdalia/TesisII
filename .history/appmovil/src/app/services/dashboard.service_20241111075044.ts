import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Observable, throwError } from 'rxjs';
import { catchError, map, tap } from 'rxjs/operators';
import { environment } from '../../environments/environment';

@Injectable({
  providedIn: 'root'
})
export class DashboardService {
  private apiUrl = environment.apiUrl;

  constructor(private http: HttpClient) { }

  private getHeaders() {
    const token = localStorage.getItem('token');
    if (!token) {
      // Redirigir al login si no hay token
      window.location.href = '/login';
      return new HttpHeaders();
    }
    return new HttpHeaders({
      'Content-Type': 'application/json',
      'Authorization': `Bearer ${token}`,
      'Accept': 'application/json'
    });
  }

  // Método para obtener todos los datos del dashboard en una sola llamada
  getAllDashboardData(): Observable<any> {
    return this.http.get(`${this.apiUrl}/dashboard`, { headers: this.getHeaders() })
      .pipe(
        tap(response => console.log('Dashboard Response:', response)),
        catchError(this.handleError)
      );
  }

  // Mantener los métodos individuales pero usando el mismo endpoint
  getDashboardData(): Observable<any> {
    return this.getAllDashboardData().pipe(
      map((response: any) => ({
        sales_total: response.salesTotal || 0,
        orders_today: response.ordersToday || 0,
        inventory_status: response.inventoryStatus?.length || 0
      }))
    );
  }

  getSalesData(): Observable<any> {
    return this.getAllDashboardData().pipe(
      map((response: any) => {
        console.log('Sales Response:', response);
        if (response.salesDatesLabels && response.salesTotals) {
          return response.salesDatesLabels.map((date: string, index: number) => ({
            date: date,
            total: response.salesTotals[index] || 0
          }));
        }
        return [];
      })
    );
  }

  getInventoryData(): Observable<any> {
    return this.getAllDashboardData().pipe(
      map((response: any) => {
        console.log('Inventory Response:', response);
        if (response.inventoryItems && response.inventoryLevels) {
          return response.inventoryItems.map((name: string, index: number) => ({
            name: name,
            quantity: response.inventoryLevels[index] || 0
          }));
        }
        return [];
      })
    );
  }

  private handleError(error: any) {
    console.error('An error occurred:', error);
    if (error.status === 401) {
      // Redirigir al login si el token no es válido
      localStorage.removeItem('token');
      window.location.href = '/login';
    }
    return throwError(() => error);
  }
}
