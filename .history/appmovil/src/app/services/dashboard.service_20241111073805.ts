import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Observable, throwError } from 'rxjs';
import { catchError, tap } from 'rxjs/operators';
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
        catchError(this.handleError),
        tap(response => console.log('Dashboard Data:', response)) // Para debug
      );
  }

  getSalesData(): Observable<any> {
    return this.http.get(`${this.apiUrl}/sales`, { headers: this.getHeaders() })
      .pipe(
        catchError(this.handleError),
        tap(response => console.log('Sales Data:', response)) // Para debug
      );
  }

  getInventoryData(): Observable<any> {
    return this.http.get(`${this.apiUrl}/inventory`, { headers: this.getHeaders() })
      .pipe(
        catchError(this.handleError),
        tap(response => console.log('Inventory Data:', response)) // Para debug
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
