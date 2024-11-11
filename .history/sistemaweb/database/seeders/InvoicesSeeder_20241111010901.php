<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class InvoicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('invoices')->insert([
            ['order_id' => 1, 'invoice_type' => 'Boleta', 'series' => 'B001', 'number' => 1, 'issue_date' => Carbon::now(), 'total' => 50.00, 'tax' => 9.00, 'customer_name' => 'Juan Perez', 'customer_document_type' => 'DNI', 'customer_document_number' => '12345678', 'customer_address' => 'Av. Lima 123', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 2, 'invoice_type' => 'Factura', 'series' => 'F001', 'number' => 2, 'issue_date' => Carbon::now(), 'total' => 100.00, 'tax' => 18.00, 'customer_name' => 'Maria Gonzalez', 'customer_document_type' => 'DNI', 'customer_document_number' => '87654321', 'customer_address' => 'Calle Buenos Aires 456', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 3, 'invoice_type' => 'Boleta', 'series' => 'B002', 'number' => 3, 'issue_date' => Carbon::now(), 'total' => 75.50, 'tax' => 13.59, 'customer_name' => 'Carlos Sanchez', 'customer_document_type' => 'RUC', 'customer_document_number' => '12345678901', 'customer_address' => 'Av. San Martin 789', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 4, 'invoice_type' => 'Factura', 'series' => 'F002', 'number' => 4, 'issue_date' => Carbon::now(), 'total' => 125.30, 'tax' => 22.56, 'customer_name' => 'Ana Torres', 'customer_document_type' => 'DNI', 'customer_document_number' => '11223344', 'customer_address' => 'Calle Los Olivos 321', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 5, 'invoice_type' => 'Boleta', 'series' => 'B003', 'number' => 5, 'issue_date' => Carbon::now(), 'total' => 65.80, 'tax' => 11.85, 'customer_name' => 'Luis Ramirez', 'customer_document_type' => 'DNI', 'customer_document_number' => '55667788', 'customer_address' => 'Av. Libertad 1010', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 6, 'invoice_type' => 'Factura', 'series' => 'F003', 'number' => 6, 'issue_date' => Carbon::now(), 'total' => 150.00, 'tax' => 27.00, 'customer_name' => 'Pedro Lopez', 'customer_document_type' => 'RUC', 'customer_document_number' => '98765432100', 'customer_address' => 'Calle Puno 200', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 7, 'invoice_type' => 'Boleta', 'series' => 'B004', 'number' => 7, 'issue_date' => Carbon::now(), 'total' => 90.00, 'tax' => 16.20, 'customer_name' => 'Elena Diaz', 'customer_document_type' => 'DNI', 'customer_document_number' => '99887766', 'customer_address' => 'Av. Miraflores 56', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 8, 'invoice_type' => 'Factura', 'series' => 'F004', 'number' => 8, 'issue_date' => Carbon::now(), 'total' => 200.00, 'tax' => 36.00, 'customer_name' => 'Javier Martinez', 'customer_document_type' => 'RUC', 'customer_document_number' => '10293847565', 'customer_address' => 'Calle Cusco 123', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 9, 'invoice_type' => 'Boleta', 'series' => 'B005', 'number' => 9, 'issue_date' => Carbon::now(), 'total' => 80.00, 'tax' => 14.40, 'customer_name' => 'Sofia Castillo', 'customer_document_type' => 'DNI', 'customer_document_number' => '22334455', 'customer_address' => 'Av. Arequipa 555', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 10, 'invoice_type' => 'Factura', 'series' => 'F005', 'number' => 10, 'issue_date' => Carbon::now(), 'total' => 110.50, 'tax' => 19.89, 'customer_name' => 'Ricardo Morales', 'customer_document_type' => 'DNI', 'customer_document_number' => '66778899', 'customer_address' => 'Calle Junin 678', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 11, 'invoice_type' => 'Boleta', 'series' => 'B006', 'number' => 11, 'issue_date' => Carbon::now(), 'total' => 55.00, 'tax' => 9.90, 'customer_name' => 'Luisa Romero', 'customer_document_type' => 'RUC', 'customer_document_number' => '11023344556', 'customer_address' => 'Calle Tacna 890', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 12, 'invoice_type' => 'Factura', 'series' => 'F006', 'number' => 12, 'issue_date' => Carbon::now(), 'total' => 95.30, 'tax' => 17.15, 'customer_name' => 'Fernando Gonzalez', 'customer_document_type' => 'DNI', 'customer_document_number' => '33445566', 'customer_address' => 'Av. Grau 432', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 13, 'invoice_type' => 'Boleta', 'series' => 'B007', 'number' => 13, 'issue_date' => Carbon::now(), 'total' => 50.20, 'tax' => 9.04, 'customer_name' => 'Paola Perez', 'customer_document_type' => 'DNI', 'customer_document_number' => '77553344', 'customer_address' => 'Av. San Isidro 123', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 14, 'invoice_type' => 'Factura', 'series' => 'F007', 'number' => 14, 'issue_date' => Carbon::now(), 'total' => 120.00, 'tax' => 21.60, 'customer_name' => 'Alfredo Sanchez', 'customer_document_type' => 'RUC', 'customer_document_number' => '21234567890', 'customer_address' => 'Calle Alianza 567', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 15, 'invoice_type' => 'Boleta', 'series' => 'B008', 'number' => 15, 'issue_date' => Carbon::now(), 'total' => 70.00, 'tax' => 12.60, 'customer_name' => 'Rosa Vasquez', 'customer_document_type' => 'DNI', 'customer_document_number' => '44556677', 'customer_address' => 'Calle Zepita 890', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 16, 'invoice_type' => 'Factura', 'series' => 'F008', 'number' => 16, 'issue_date' => Carbon::now(), 'total' => 140.00, 'tax' => 25.20, 'customer_name' => 'Carlos Herrera', 'customer_document_type' => 'DNI', 'customer_document_number' => '11332244', 'customer_address' => 'Av. Ricardo Palma 101', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 17, 'invoice_type' => 'Boleta', 'series' => 'B009', 'number' => 17, 'issue_date' => Carbon::now(), 'total' => 95.00, 'tax' => 17.10, 'customer_name' => 'Jorge Castro', 'customer_document_type' => 'RUC', 'customer_document_number' => '32123456789', 'customer_address' => 'Calle Velazco 333', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 18, 'invoice_type' => 'Factura', 'series' => 'F009', 'number' => 18, 'issue_date' => Carbon::now(), 'total' => 135.00, 'tax' => 24.30, 'customer_name' => 'Susana Medina', 'customer_document_type' => 'DNI', 'customer_document_number' => '22334455', 'customer_address' => 'Av. Benavides 890', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 19, 'invoice_type' => 'Boleta', 'series' => 'B010', 'number' => 19, 'issue_date' => Carbon::now(), 'total' => 60.00, 'tax' => 10.80, 'customer_name' => 'Mario Diaz', 'customer_document_type' => 'DNI', 'customer_document_number' => '66778899', 'customer_address' => 'Calle Av. La Marina 321', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 20, 'invoice_type' => 'Factura', 'series' => 'F010', 'number' => 20, 'issue_date' => Carbon::now(), 'total' => 110.00, 'tax' => 19.80, 'customer_name' => 'Nicolas Ramirez', 'customer_document_type' => 'RUC', 'customer_document_number' => '56789012345', 'customer_address' => 'Calle 28 de Julio 123', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            
        ]);
    }
}
