// src/app/pages/login/login.page.ts
import { Component } from '@angular/core';
import { Router } from '@angular/router';
import { AuthService } from '../../services/auth.service';
import { ToastController } from '@ionic/angular';

@Component({
  selector: 'app-login',
  templateUrl: './login.page.html',
  styleUrls: ['./login.page.scss'],
})
export class LoginPage {
  credentials = {
    email: '',
    password: ''
  };

  constructor(
    private authService: AuthService,
    private router: Router,
    private toastController: ToastController
  ) {}

  async login() {
    try {
      await this.authService.login(
        this.credentials.email,
        this.credentials.password
      ).subscribe(
        async (res) => {
          const toast = await this.toastController.create({
            message: 'Login exitoso',
            duration: 2000,
            color: 'success'
          });
          toast.present();
          this.router.navigate(['/home']);
        },
        async (err) => {
          const toast = await this.toastController.create({
            message: 'Error en las credenciales',
            duration: 2000,
            color: 'danger'
          });
          toast.present();
        }
      );
    } catch (error) {
      console.error('Error al iniciar sesión:', error);
    }
  }
}
