import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class DashboardService {
  private apiUrl = 'http://localhost:8000/api';

  constructor(private http: HttpClient) { }

  // Método para obtener datos del dashboard
  getDashboardData(): Observable<any> {
    return this.http.get(`${this.apiUrl}/dashboard`);
  }

  // Método para obtener datos de ventas diarias
  getSalesData(): Observable<any> {
    return this.http.get(`${this.apiUrl}/sales`);
  }

  // Método para obtener datos de inventario
  getInventoryData(): Observable<any> {
    return this.http.get(`${this.apiUrl}/inventory`);
  }
}
