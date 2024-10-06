<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            //Administracion
            $user =User::create([
                'name' => 'Fernando',
                'email'    => 'admin@example.com',
                'password' => Hash::make('12345678'), // password

            ])->assignRole('gerente_general');

            $user =User::create([
                'name' => 'Xiomara',
                'email'    => 'xiomara@gmail.com',
                'password' => Hash::make('12345678'), // password

            ])->assignRole('gerente_ventas');

            $user =User::create([
                'name' => 'Luis',
                'email'    => 'chef@gmail.com',
                'password' => Hash::make('12345678'), // password

            ])->assignRole('cocinero');

            $user =User::create([
                'name' => 'Nilo',
                'email'    => 'mesero@gmail.com',
                'password' => Hash::make('12345678'), // password

            ])->assignRole('mesero');

            $user =User::create([
                'name' => 'Julia',
                'email'    => 'asistentecosina1@gmail.com',
                'password' => Hash::make('12345678'), // password

            ])->assignRole('asistente_cosina');

            // $user =User::create([
            //     'name' => 'Jhosep',
            //     'email'    => 'asistentecosina1@example.com',
            //     'password' => Hash::make('12345678'), // password

            // ])->assignRole('admin');

            // $user =User::create([
            //     'name' => 'Jhosep',
            //     'email'    => 'admin@example.com',
            //     'password' => Hash::make('12345678'), // password

            // ])->assignRole('admin');

            // $user =User::create([
            //     'name' => 'Jhosep',
            //     'email'    => 'admin@example.com',
            //     'password' => Hash::make('12345678'), // password

            // ])->assignRole('admin');
    }
}
