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

  getDashboardData(): Observable<any> {
    return this.http.get(`${this.apiUrl}/dashboard`, { headers: this.getHeaders() })
      .pipe(
        map((response: any) => ({
          sales_total: response.salesTotal,
          orders_today: response.ordersToday,
          inventory_status: response.inventoryStatus.length
        })),
        catchError(this.handleError)
      );
  }

  getSalesData(): Observable<any> {
    return this.http.get(`${this.apiUrl}/dashboard`, { headers: this.getHeaders() })
      .pipe(
        map((response: any) => {
          return response.salesDatesLabels.map((date: string, index: number) => ({
            date: date,
            total: response.salesTotals[index]
          }));
        }),
        catchError(this.handleError)
      );
  }

  getInventoryData(): Observable<any> {
    return this.http.get(`${this.apiUrl}/dashboard`, { headers: this.getHeaders() })
      .pipe(
        map((response: any) => {
          return response.inventoryItems.map((name: string, index: number) => ({
            name: name,
            quantity: response.inventoryLevels[index]
          }));
        }),
        catchError(this.handleError)
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
