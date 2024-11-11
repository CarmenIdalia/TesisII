import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { AuthService } from '../../services/auth.service';
import { ToastController } from '@ionic/angular';

@Component({
  selector: 'app-login',
  templateUrl: './login.page.html',
  styleUrls: ['./login.page.scss'],
})
export class LoginPage implements OnInit {
  credentials = {
    email: '',
    password: ''
  };

  constructor(
    private authService: AuthService,
    private router: Router,
    private toastController: ToastController
  ) { }

  ngOnInit() {
    // Si ya está autenticado, redirigir a home
    if (this.authService.isAuthenticated()) {
      this.router.navigate(['/home']);
    }
  }

  async login() {
    try {
      this.authService.login(
        this.credentials.email,
        this.credentials.password
      ).subscribe(
        async (res) => {
          const toast = await this.toastController.create({
            message: 'Login exitoso',
            duration: 2000,
            color: 'success'
          });
          await toast.present();
          this.router.navigate(['/home']);
        },
        async (err) => {
          const toast = await this.toastController.create({
            message: err.error.message || 'Error en las credenciales',
            duration: 2000,
            color: 'danger'
          });
          await toast.present();
        }
      );
    } catch (error) {
      console.error('Error al iniciar sesión:', error);
    }
  }
}
