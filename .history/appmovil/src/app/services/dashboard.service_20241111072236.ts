import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { environment } from 'src/environments/environment';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class DashboardService {
  private apiUrl = environment.apiUrl;

  constructor(private http: HttpClient) { }

  getDashboardData(): Observable<any> {
    return this.http.get(`${this.apiUrl}/dashboard`);
  }

  getSalesData(): Observable<any> {
    return this.http.get(`${this.apiUrl}/sales`);
  }

  getInventoryData(): Observable<any> {
    return this.http.get(`${this.apiUrl}/inventory`);
  }
}
