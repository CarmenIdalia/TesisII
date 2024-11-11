<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InvoiceItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('invoice_items')->insert([
            ['invoice_id' => 1, 'description' => 'Bebida Coca-Cola', 'quantity' => 2, 'unit_price' => 3.50, 'total_price' => 7.00],
            ['invoice_id' => 2, 'description' => 'Pizza Margarita', 'quantity' => 1, 'unit_price' => 20.00, 'total_price' => 20.00],
            ['invoice_id' => 3, 'description' => 'Hamburguesa con Papas', 'quantity' => 2, 'unit_price' => 15.00, 'total_price' => 30.00],
            ['invoice_id' => 4, 'description' => 'Pechuga de Pollo', 'quantity' => 1, 'unit_price' => 18.00, 'total_price' => 18.00],
            ['invoice_id' => 5, 'description' => 'Sopa de Verduras', 'quantity' => 1, 'unit_price' => 7.00, 'total_price' => 7.00],
            ['invoice_id' => 6, 'description' => 'Ensalada César', 'quantity' => 1, 'unit_price' => 12.50, 'total_price' => 12.50],
            ['invoice_id' => 7, 'description' => 'Jugo Natural', 'quantity' => 3, 'unit_price' => 5.00, 'total_price' => 15.00],
            ['invoice_id' => 8, 'description' => 'Filete de Pescado', 'quantity' => 2, 'unit_price' => 22.00, 'total_price' => 44.00],
            ['invoice_id' => 9, 'description' => 'Pizza Hawaiana', 'quantity' => 1, 'unit_price' => 24.00, 'total_price' => 24.00],
            ['invoice_id' => 10, 'description' => 'Pastel de Chocolate', 'quantity' => 2, 'unit_price' => 6.50, 'total_price' => 13.00],
            ['invoice_id' => 11, 'description' => 'Cerveza', 'quantity' => 3, 'unit_price' => 4.00, 'total_price' => 12.00],
            ['invoice_id' => 12, 'description' => 'Ensalada de Frutas', 'quantity' => 1, 'unit_price' => 8.00, 'total_price' => 8.00],
            ['invoice_id' => 13, 'description' => 'Pizza Vegetariana', 'quantity' => 1, 'unit_price' => 21.00, 'total_price' => 21.00],
            ['invoice_id' => 14, 'description' => 'Tacos de Carne', 'quantity' => 2, 'unit_price' => 5.50, 'total_price' => 11.00],
            ['invoice_id' => 15, 'description' => 'Sopa de Pollo', 'quantity' => 1, 'unit_price' => 9.00, 'total_price' => 9.00],
            ['invoice_id' => 16, 'description' => 'Pechuga al Horno', 'quantity' => 1, 'unit_price' => 20.00, 'total_price' => 20.00],
            ['invoice_id' => 17, 'description' => 'Tarta de Manzana', 'quantity' => 1, 'unit_price' => 5.00, 'total_price' => 5.00],
            ['invoice_id' => 18, 'description' => 'Papas Fritas', 'quantity' => 2, 'unit_price' => 3.00, 'total_price' => 6.00],
            ['invoice_id' => 19, 'description' => 'Torta de Chocolate', 'quantity' => 1, 'unit_price' => 8.50, 'total_price' => 8.50],
            ['invoice_id' => 20, 'description' => 'Espaguetis Bolognesa', 'quantity' => 2, 'unit_price' => 12.00, 'total_price' => 24.00],
            ['invoice_id' => 21, 'description' => 'Cerveza Artesanal', 'quantity' => 3, 'unit_price' => 5.00, 'total_price' => 15.00],
            ['invoice_id' => 22, 'description' => 'Ensalada Griega', 'quantity' => 1, 'unit_price' => 11.00, 'total_price' => 11.00],
            ['invoice_id' => 23, 'description' => 'Sándwich Club', 'quantity' => 2, 'unit_price' => 6.00, 'total_price' => 12.00],
            ['invoice_id' => 24, 'description' => 'Lasaña de Carne', 'quantity' => 2, 'unit_price' => 16.00, 'total_price' => 32.00],
            ['invoice_id' => 25, 'description' => 'Sopa de Mariscos', 'quantity' => 1, 'unit_price' => 10.00, 'total_price' => 10.00],
            ['invoice_id' => 26, 'description' => 'Pechuga con Papas', 'quantity' => 1, 'unit_price' => 18.50, 'total_price' => 18.50],
            ['invoice_id' => 27, 'description' => 'Helado de Vainilla', 'quantity' => 2, 'unit_price' => 4.00, 'total_price' => 8.00],
            ['invoice_id' => 28, 'description' => 'Pizza 4 Estaciones', 'quantity' => 1, 'unit_price' => 23.00, 'total_price' => 23.00],
            ['invoice_id' => 29, 'description' => 'Pechuga con Verduras', 'quantity' => 2, 'unit_price' => 19.00, 'total_price' => 38.00],
            ['invoice_id' => 30, 'description' => 'Sopa de Tomate', 'quantity' => 1, 'unit_price' => 6.50, 'total_price' => 6.50],
            ['invoice_id' => 31, 'description' => 'Croissant', 'quantity' => 2, 'unit_price' => 2.50, 'total_price' => 5.00],
            ['invoice_id' => 32, 'description' => 'Limonada Natural', 'quantity' => 3, 'unit_price' => 4.00, 'total_price' => 12.00],
            ['invoice_id' => 33, 'description' => 'Ensalada Tropical', 'quantity' => 1, 'unit_price' => 9.00, 'total_price' => 9.00],
            ['invoice_id' => 34, 'description' => 'Hamburguesa Doble', 'quantity' => 1, 'unit_price' => 18.00, 'total_price' => 18.00],
            ['invoice_id' => 35, 'description' => 'Jugo de Mango', 'quantity' => 2, 'unit_price' => 5.50, 'total_price' => 11.00],
            ['invoice_id' => 36, 'description' => 'Churros', 'quantity' => 1, 'unit_price' => 4.00, 'total_price' => 4.00],
            ['invoice_id' => 37, 'description' => 'Pizza Pepperoni', 'quantity' => 1, 'unit_price' => 22.00, 'total_price' => 22.00],
            ['invoice_id' => 38, 'description' => 'Arroz con Pollo', 'quantity' => 2, 'unit_price' => 15.50, 'total_price' => 31.00],
            ['invoice_id' => 39, 'description' => 'Ensalada de Pollo', 'quantity' => 1, 'unit_price' => 12.00, 'total_price' => 12.00],
            ['invoice_id' => 40, 'description' => 'Pollo a la Brasa', 'quantity' => 1, 'unit_price' => 20.00, 'total_price' => 20.00],
            ['invoice_id' => 41, 'description' => 'Fruta Fresca', 'quantity' => 2, 'unit_price' => 5.00, 'total_price' => 10.00],
            ['invoice_id' => 42, 'description' => 'Sopa de Pescado', 'quantity' => 1, 'unit_price' => 11.50, 'total_price' => 11.50],
            ['invoice_id' => 43, 'description' => 'Tacos de Pescado', 'quantity' => 1, 'unit_price' => 7.00, 'total_price' => 7.00],
            ['invoice_id' => 44, 'description' => 'Ensalada Mexicana', 'quantity' => 2, 'unit_price' => 10.00, 'total_price' => 20.00],
            ['invoice_id' => 45, 'description' => 'Burgers Mix', 'quantity' => 1, 'unit_price' => 13.00, 'total_price' => 13.00],
            ['invoice_id' => 46, 'description' => 'Pizza Cuatro Quesos', 'quantity' => 2, 'unit_price' => 18.50, 'total_price' => 37.00],
            ['invoice_id' => 47, 'description' => 'Mojito', 'quantity' => 2, 'unit_price' => 6.00, 'total_price' => 12.00],
            ['invoice_id' => 48, 'description' => 'Pollo con Papas', 'quantity' => 1, 'unit_price' => 17.50, 'total_price' => 17.50],
            ['invoice_id' => 49, 'description' => 'Ensalada de Atún', 'quantity' => 2, 'unit_price' => 10.50, 'total_price' => 21.00],
            ['invoice_id' => 50, 'description' => 'Lasaña Vegetariana', 'quantity' => 1, 'unit_price' => 19.00, 'total_price' => 19.00],
            
        ]);
    }
}
