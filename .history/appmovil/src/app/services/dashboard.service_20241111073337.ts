import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Observable } from 'rxjs';
import { environment } from '../../../environments/environment';

@Injectable({
  providedIn: 'root'
})
export class DashboardService {
  private apiUrl = environment.apiUrl; // Asegúrate de tener configurada la URL base en environment

  constructor(private http: HttpClient) { }

  private getHeaders() {
    const token = localStorage.getItem('token');
    return new HttpHeaders({
      'Content-Type': 'application/json',
      'Authorization': `Bearer ${token}`
    });
  }

  getDashboardData(): Observable<any> {
    return this.http.get(`${this.apiUrl}/dashboard/summary`, { headers: this.getHeaders() });
  }

  getSalesData(): Observable<any> {
    return this.http.get(`${this.apiUrl}/dashboard/sales`, { headers: this.getHeaders() });
  }

  getInventoryData(): Observable<any> {
    return this.http.get(`${this.apiUrl}/dashboard/inventory`, { headers: this.getHeaders() });
  }
}
