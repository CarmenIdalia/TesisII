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
            ['customer_id' => 1, 'table_id' => 1, 'total' => 35.50, 'order_type' => 'Mesa', 'order_date' => Carbon::now(), 'payment_status' => 'Pagado', 'delivery_address' => NULL, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['customer_id' => 2, 'table_id' => 2, 'total' => 42.30, 'order_type' => 'ParaLlevar', 'order_date' => Carbon::now(), 'payment_status' => 'Pendiente', 'delivery_address' => NULL, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['customer_id' => 3, 'table_id' => 3, 'total' => 58.10, 'order_type' => 'Delivery', 'order_date' => Carbon::now(), 'payment_status' => 'Pagado', 'delivery_address' => 'Calle Falsa 123', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['customer_id' => 4, 'table_id' => 4, 'total' => 24.80, 'order_type' => 'Mesa', 'order_date' => Carbon::now(), 'payment_status' => 'Pagado', 'delivery_address' => NULL, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['customer_id' => 5, 'table_id' => 5, 'total' => 63.20, 'order_type' => 'ParaLlevar', 'order_date' => Carbon::now(), 'payment_status' => 'Pagado', 'delivery_address' => NULL, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['customer_id' => 6, 'table_id' => 6, 'total' => 15.50, 'order_type' => 'Delivery', 'order_date' => Carbon::now(), 'payment_status' => 'Anulado', 'delivery_address' => 'Avenida Libertad 456', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['customer_id' => 7, 'table_id' => 7, 'total' => 89.00, 'order_type' => 'Mesa', 'order_date' => Carbon::now(), 'payment_status' => 'Pagado', 'delivery_address' => NULL, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['customer_id' => 8, 'table_id' => 8, 'total' => 52.40, 'order_type' => 'ParaLlevar', 'order_date' => Carbon::now(), 'payment_status' => 'Pendiente', 'delivery_address' => NULL, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['customer_id' => 9, 'table_id' => 9, 'total' => 77.90, 'order_type' => 'Delivery', 'order_date' => Carbon::now(), 'payment_status' => 'Pagado', 'delivery_address' => 'Calle del Sol 789', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['customer_id' => 10, 'table_id' => 10, 'total' => 33.70, 'order_type' => 'Mesa', 'order_date' => Carbon::now(), 'payment_status' => 'Pagado', 'delivery_address' => NULL, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['customer_id' => 11, 'table_id' => 11, 'total' => 49.60, 'order_type' => 'ParaLlevar', 'order_date' => Carbon::now(), 'payment_status' => 'Pagado', 'delivery_address' => NULL, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['customer_id' => 12, 'table_id' => 12, 'total' => 59.00, 'order_type' => 'Delivery', 'order_date' => Carbon::now(), 'payment_status' => 'Pendiente', 'delivery_address' => 'Avenida Central 321', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['customer_id' => 13, 'table_id' => 13, 'total' => 81.80, 'order_type' => 'Mesa', 'order_date' => Carbon::now(), 'payment_status' => 'Pagado', 'delivery_address' => NULL, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['customer_id' => 14, 'table_id' => 14, 'total' => 23.50, 'order_type' => 'ParaLlevar', 'order_date' => Carbon::now(), 'payment_status' => 'Anulado', 'delivery_address' => NULL, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['customer_id' => 15, 'table_id' => 15, 'total' => 40.90, 'order_type' => 'Delivery', 'order_date' => Carbon::now(), 'payment_status' => 'Pagado', 'delivery_address' => 'Calle Larga 654', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['customer_id' => 16, 'table_id' => 16, 'total' => 54.10, 'order_type' => 'Mesa', 'order_date' => Carbon::now(), 'payment_status' => 'Pagado', 'delivery_address' => NULL, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['customer_id' => 17, 'table_id' => 17, 'total' => 67.40, 'order_type' => 'ParaLlevar', 'order_date' => Carbon::now(), 'payment_status' => 'Pagado', 'delivery_address' => NULL, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['customer_id' => 18, 'table_id' => 18, 'total' => 72.60, 'order_type' => 'Delivery', 'order_date' => Carbon::now(), 'payment_status' => 'Pendiente', 'delivery_address' => 'Calle Mayor 100', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['customer_id' => 19, 'table_id' => 19, 'total' => 29.80, 'order_type' => 'Mesa', 'order_date' => Carbon::now(), 'payment_status' => 'Pagado', 'delivery_address' => NULL, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['customer_id' => 20, 'table_id' => 20, 'total' => 93.10, 'order_type' => 'ParaLlevar', 'order_date' => Carbon::now(), 'payment_status' => 'Pagado', 'delivery_address' => NULL, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['customer_id' => 21, 'table_id' => 1, 'total' => 60.40, 'order_type' => 'Mesa', 'order_date' => Carbon::now(), 'payment_status' => 'Pagado', 'delivery_address' => NULL, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['customer_id' => 22, 'table_id' => 2, 'total' => 45.20, 'order_type' => 'Delivery', 'order_date' => Carbon::now(), 'payment_status' => 'Pagado', 'delivery_address' => 'Calle Secundaria 852', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['customer_id' => 23, 'table_id' => 3, 'total' => 53.30, 'order_type' => 'ParaLlevar', 'order_date' => Carbon::now(), 'payment_status' => 'Pendiente', 'delivery_address' => NULL, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['customer_id' => 24, 'table_id' => 4, 'total' => 35.50, 'order_type' => 'Mesa', 'order_date' => Carbon::now(), 'payment_status' => 'Pagado', 'delivery_address' => NULL, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['customer_id' => 25, 'table_id' => 5, 'total' => 61.70, 'order_type' => 'Delivery', 'order_date' => Carbon::now(), 'payment_status' => 'Pagado', 'delivery_address' => 'Avenida Primavera 456', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['customer_id' => 26, 'table_id' => 6, 'total' => 27.90, 'order_type' => 'ParaLlevar', 'order_date' => Carbon::now(), 'payment_status' => 'Anulado', 'delivery_address' => NULL, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['customer_id' => 27, 'table_id' => 7, 'total' => 79.80, 'order_type' => 'Mesa', 'order_date' => Carbon::now(), 'payment_status' => 'Pagado', 'delivery_address' => NULL, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['customer_id' => 28, 'table_id' => 8, 'total' => 43.00, 'order_type' => 'Delivery', 'order_date' => Carbon::now(), 'payment_status' => 'Pendiente', 'delivery_address' => 'Calle Tranquila 101', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['customer_id' => 29, 'table_id' => 9, 'total' => 88.50, 'order_type' => 'ParaLlevar', 'order_date' => Carbon::now(), 'payment_status' => 'Pagado', 'delivery_address' => NULL, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['customer_id' => 30, 'table_id' => 10, 'total' => 29.60, 'order_type' => 'Mesa', 'order_date' => Carbon::now(), 'payment_status' => 'Pagado', 'delivery_address' => NULL, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['customer_id' => 31, 'table_id' => 11, 'total' => 70.10, 'order_type' => 'Delivery', 'order_date' => Carbon::now(), 'payment_status' => 'Pagado', 'delivery_address' => 'Avenida Libertador 789', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['customer_id' => 32, 'table_id' => 12, 'total' => 56.40, 'order_type' => 'ParaLlevar', 'order_date' => Carbon::now(), 'payment_status' => 'Pendiente', 'delivery_address' => NULL, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['customer_id' => 33, 'table_id' => 13, 'total' => 39.20, 'order_type' => 'Mesa', 'order_date' => Carbon::now(), 'payment_status' => 'Pagado', 'delivery_address' => NULL, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['customer_id' => 34, 'table_id' => 14, 'total' => 72.10, 'order_type' => 'Delivery', 'order_date' => Carbon::now(), 'payment_status' => 'Pagado', 'delivery_address' => 'Calle Oscura 567', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['customer_id' => 35, 'table_id' => 15, 'total' => 66.50, 'order_type' => 'ParaLlevar', 'order_date' => Carbon::now(), 'payment_status' => 'Pagado', 'delivery_address' => NULL, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['customer_id' => 36, 'table_id' => 16, 'total' => 58.30, 'order_type' => 'Mesa', 'order_date' => Carbon::now(), 'payment_status' => 'Pagado', 'delivery_address' => NULL, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['customer_id' => 37, 'table_id' => 17, 'total' => 47.90, 'order_type' => 'Delivery', 'order_date' => Carbon::now(), 'payment_status' => 'Pagado', 'delivery_address' => 'Avenida Sol 321', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['customer_id' => 38, 'table_id' => 18, 'total' => 60.00, 'order_type' => 'ParaLlevar', 'order_date' => Carbon::now(), 'payment_status' => 'Anulado', 'delivery_address' => NULL, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['customer_id' => 39, 'table_id' => 19, 'total' => 85.20, 'order_type' => 'Mesa', 'order_date' => Carbon::now(), 'payment_status' => 'Pagado', 'delivery_address' => NULL, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['customer_id' => 40, 'table_id' => 20, 'total' => 91.60, 'order_type' => 'Delivery', 'order_date' => Carbon::now(), 'payment_status' => 'Pagado', 'delivery_address' => 'Calle Nueva 654', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['customer_id' => 41, 'table_id' => 1, 'total' => 49.80, 'order_type' => 'Mesa', 'order_date' => Carbon::now(), 'payment_status' => 'Pagado', 'delivery_address' => NULL, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['customer_id' => 42, 'table_id' => 2, 'total' => 78.90, 'order_type' => 'ParaLlevar', 'order_date' => Carbon::now(), 'payment_status' => 'Pagado', 'delivery_address' => NULL, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['customer_id' => 43, 'table_id' => 3, 'total' => 63.50, 'order_type' => 'Delivery', 'order_date' => Carbon::now(), 'payment_status' => 'Pagado', 'delivery_address' => 'Avenida Santa Fe 321', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['customer_id' => 44, 'table_id' => 4, 'total' => 54.60, 'order_type' => 'Mesa', 'order_date' => Carbon::now(), 'payment_status' => 'Pendiente', 'delivery_address' => NULL, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['customer_id' => 45, 'table_id' => 5, 'total' => 76.80, 'order_type' => 'ParaLlevar', 'order_date' => Carbon::now(), 'payment_status' => 'Pagado', 'delivery_address' => NULL, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['customer_id' => 46, 'table_id' => 6, 'total' => 44.10, 'order_type' => 'Delivery', 'order_date' => Carbon::now(), 'payment_status' => 'Pagado', 'delivery_address' => 'Calle Fuerte 567', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['customer_id' => 47, 'table_id' => 7, 'total' => 61.20, 'order_type' => 'Mesa', 'order_date' => Carbon::now(), 'payment_status' => 'Pagado', 'delivery_address' => NULL, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['customer_id' => 48, 'table_id' => 8, 'total' => 59.80, 'order_type' => 'ParaLlevar', 'order_date' => Carbon::now(), 'payment_status' => 'Pagado', 'delivery_address' => NULL, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['customer_id' => 49, 'table_id' => 9, 'total' => 85.30, 'order_type' => 'Delivery', 'order_date' => Carbon::now(), 'payment_status' => 'Pagado', 'delivery_address' => 'Avenida Larga 987', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['customer_id' => 50, 'table_id' => 10, 'total' => 50.40, 'order_type' => 'Mesa', 'order_date' => Carbon::now(), 'payment_status' => 'Pagado', 'delivery_address' => NULL, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['customer_id' => 51, 'table_id' => 11, 'total' => 44.70, 'order_type' => 'ParaLlevar', 'order_date' => Carbon::now(), 'payment_status' => 'Pendiente', 'delivery_address' => NULL, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['customer_id' => 52, 'table_id' => 12, 'total' => 82.20, 'order_type' => 'Delivery', 'order_date' => Carbon::now(), 'payment_status' => 'Pagado', 'delivery_address' => 'Calle Real 123', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['customer_id' => 53, 'table_id' => 13, 'total' => 67.90, 'order_type' => 'Mesa', 'order_date' => Carbon::now(), 'payment_status' => 'Pagado', 'delivery_address' => NULL, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['customer_id' => 54, 'table_id' => 14, 'total' => 53.60, 'order_type' => 'ParaLlevar', 'order_date' => Carbon::now(), 'payment_status' => 'Pagado', 'delivery_address' => NULL, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['customer_id' => 55, 'table_id' => 15, 'total' => 88.10, 'order_type' => 'Delivery', 'order_date' => Carbon::now(), 'payment_status' => 'Anulado', 'delivery_address' => 'Avenida Norte 456', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['customer_id' => 56, 'table_id' => 16, 'total' => 66.00, 'order_type' => 'Mesa', 'order_date' => Carbon::now(), 'payment_status' => 'Pagado', 'delivery_address' => NULL, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['customer_id' => 57, 'table_id' => 17, 'total' => 79.10, 'order_type' => 'ParaLlevar', 'order_date' => Carbon::now(), 'payment_status' => 'Pagado', 'delivery_address' => NULL, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['customer_id' => 58, 'table_id' => 18, 'total' => 72.30, 'order_type' => 'Delivery', 'order_date' => Carbon::now(), 'payment_status' => 'Pagado', 'delivery_address' => 'Calle de la Paz 101', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['customer_id' => 59, 'table_id' => 19, 'total' => 40.00, 'order_type' => 'Mesa', 'order_date' => Carbon::now(), 'payment_status' => 'Pagado', 'delivery_address' => NULL, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['customer_id' => 60, 'table_id' => 20, 'total' => 54.20, 'order_type' => 'ParaLlevar', 'order_date' => Carbon::now(), 'payment_status' => 'Pagado', 'delivery_address' => NULL, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
