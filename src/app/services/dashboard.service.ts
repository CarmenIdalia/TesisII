import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Observable, throwError } from 'rxjs';
import { catchError, map, tap } from 'rxjs/operators';
import { environment } from '../../environments/environment';
import { DashboardData } from '../interfaces/dashboard.interfaces';

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
  getDashboardData(): Observable<DashboardData> {
    const headers = this.getHeaders();
    return this.http.get<DashboardData>(`${this.apiUrl}/dashboard`, { headers }).pipe(
      tap(response => console.log('API Response:', response)),
      map(response => {
        // Si la respuesta viene en una propiedad data, extraerla
        const data = (response as any).data || response;
        console.log('Processed data:', data);
        return data;
      }),
      catchError(error => {
        console.error('API Error:', error);
        return throwError(() => error);
      })
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
