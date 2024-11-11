// src/app/pages/home/home.page.ts
import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { AuthService } from '../../services/auth.service';
import { ToastController } from '@ionic/angular';

@Component({
  selector: 'app-home',
  templateUrl: 'home.page.html',
  styleUrls: ['home.page.scss'],
})
export class HomePage implements OnInit {
  userName: string = 'Usuario';
  lastLogin: Date = new Date();

  recentActivities = [
    {
      icon: 'checkmark-circle',
      color: 'success',
      title: 'Tarea Completada',
      description: 'Se completó la actualización del sistema',
      time: new Date()
    },
    {
      icon: 'alert-circle',
      color: 'warning',
      title: 'Nueva Notificación',
      description: 'Tienes una nueva tarea pendiente',
      time: new Date(Date.now() - 3600000)
    },
    {
      icon: 'people',
      color: 'primary',
      title: 'Nuevo Usuario',
      description: 'Se registró un nuevo usuario en el sistema',
      time: new Date(Date.now() - 7200000)
    }
  ];

  constructor(
    private authService: AuthService,
    private router: Router,
    private toastController: ToastController
  ) {}

  ngOnInit() {
    // Aquí puedes cargar datos del usuario o realizar otras inicializaciones
  }

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
