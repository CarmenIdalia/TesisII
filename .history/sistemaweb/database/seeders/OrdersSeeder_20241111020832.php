<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('orders')->insert([
            ['customer_id' => 1, 'table_id' => 1, 'total' => 35.50, 'order_type' => 'Mesa', 'order_date' => Carbon::now()->subDays(1), 'payment_status' => 'Pagado', 'delivery_address' => NULL, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    ['customer_id' => 2, 'table_id' => 2, 'total' => 42.30, 'order_type' => 'ParaLlevar', 'order_date' => Carbon::now()->subDays(2), 'payment_status' => 'Pendiente', 'delivery_address' => NULL, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    ['customer_id' => 3, 'table_id' => 3, 'total' => 58.10, 'order_type' => 'Delivery', 'order_date' => Carbon::now()->subDays(3), 'payment_status' => 'Pagado', 'delivery_address' => 'Calle Falsa 123', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    ['customer_id' => 4, 'table_id' => 4, 'total' => 24.80, 'order_type' => 'Mesa', 'order_date' => Carbon::now()->subDays(4), 'payment_status' => 'Pagado', 'delivery_address' => NULL, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    ['customer_id' => 5, 'table_id' => 5, 'total' => 63.20, 'order_type' => 'ParaLlevar', 'order_date' => Carbon::now()->subDays(5), 'payment_status' => 'Pagado', 'delivery_address' => NULL, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    ['customer_id' => 6, 'table_id' => 6, 'total' => 15.50, 'order_type' => 'Delivery', 'order_date' => Carbon::now()->subDays(6), 'payment_status' => 'Anulado', 'delivery_address' => 'Avenida Libertad 456', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    ['customer_id' => 7, 'table_id' => 7, 'total' => 89.00, 'order_type' => 'Mesa', 'order_date' => Carbon::now()->subDays(7), 'payment_status' => 'Pagado', 'delivery_address' => NULL, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    ['customer_id' => 8, 'table_id' => 8, 'total' => 52.40, 'order_type' => 'ParaLlevar', 'order_date' => Carbon::now()->subDays(8), 'payment_status' => 'Pendiente', 'delivery_address' => NULL, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    ['customer_id' => 9, 'table_id' => 9, 'total' => 77.90, 'order_type' => 'Delivery', 'order_date' => Carbon::now()->subDays(9), 'payment_status' => 'Pagado', 'delivery_address' => 'Calle del Sol 789', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    ['customer_id' => 10, 'table_id' => 10, 'total' => 33.70, 'order_type' => 'Mesa', 'order_date' => Carbon::now()->subDays(10), 'payment_status' => 'Pagado', 'delivery_address' => NULL, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    ['customer_id' => 11, 'table_id' => 11, 'total' => 49.60, 'order_type' => 'ParaLlevar', 'order_date' => Carbon::now()->subDays(11), 'payment_status' => 'Pagado', 'delivery_address' => NULL, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    ['customer_id' => 12, 'table_id' => 12, 'total' => 59.00, 'order_type' => 'Delivery', 'order_date' => Carbon::now()->subDays(12), 'payment_status' => 'Pendiente', 'delivery_address' => 'Avenida Central 321', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    ['customer_id' => 13, 'table_id' => 13, 'total' => 81.80, 'order_type' => 'Mesa', 'order_date' => Carbon::now()->subDays(13), 'payment_status' => 'Pagado', 'delivery_address' => NULL, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    ['customer_id' => 14, 'table_id' => 14, 'total' => 23.50, 'order_type' => 'ParaLlevar', 'order_date' => Carbon::now()->subDays(14), 'payment_status' => 'Anulado', 'delivery_address' => NULL, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    ['customer_id' => 15, 'table_id' => 15, 'total' => 40.90, 'order_type' => 'Delivery', 'order_date' => Carbon::now()->subDays(15), 'payment_status' => 'Pagado', 'delivery_address' => 'Calle Larga 654', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    ['customer_id' => 16, 'table_id' => 16, 'total' => 54.10, 'order_type' => 'Mesa', 'order_date' => Carbon::now()->subDays(16), 'payment_status' => 'Pagado', 'delivery_address' => NULL, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    ['customer_id' => 17, 'table_id' => 17, 'total' => 67.40, 'order_type' => 'ParaLlevar', 'order_date' => Carbon::now()->subDays(17), 'payment_status' => 'Pagado', 'delivery_address' => NULL, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    ['customer_id' => 18, 'table_id' => 18, 'total' => 72.60, 'order_type' => 'Delivery', 'order_date' => Carbon::now()->subDays(18), 'payment_status' => 'Pendiente', 'delivery_address' => 'Calle Mayor 100', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    ['customer_id' => 19, 'table_id' => 19, 'total' => 29.80, 'order_type' => 'Mesa', 'order_date' => Carbon::now()->subDays(19), 'payment_status' => 'Pagado', 'delivery_address' => NULL, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    ['customer_id' => 20, 'table_id' => 20, 'total' => 93.10, 'order_type' => 'ParaLlevar', 'order_date' => Carbon::now()->subDays(20), 'payment_status' => 'Pagado', 'delivery_address' => NULL, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    // Additional orders to cover a month range
    ['customer_id' => 21, 'table_id' => 1, 'total' => 60.40, 'order_type' => 'Mesa', 'order_date' => Carbon::now()->subDays(21), 'payment_status' => 'Pagado', 'delivery_address' => NULL, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    ['customer_id' => 22, 'table_id' => 2, 'total' => 45.20, 'order_type' => 'Delivery', 'order_date' => Carbon::now()->subDays(22), 'payment_status' => 'Pagado', 'delivery_address' => 'Calle Secundaria 852', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    ['customer_id' => 23, 'table_id' => 3, 'total' => 53.30, 'order_type' => 'ParaLlevar', 'order_date' => Carbon::now()->subDays(23), 'payment_status' => 'Pendiente', 'delivery_address' => NULL, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
