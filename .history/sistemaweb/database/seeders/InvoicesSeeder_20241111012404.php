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
            ['order_id' => 21, 'invoice_type' => 'Boleta', 'series' => 'B011', 'number' => 21, 'issue_date' => Carbon::now(), 'total' => 78.50, 'tax' => 14.13, 'customer_name' => 'David Gonzalez', 'customer_document_type' => 'DNI', 'customer_document_number' => '12345679', 'customer_address' => 'Calle Callao 234', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 22, 'invoice_type' => 'Factura', 'series' => 'F011', 'number' => 22, 'issue_date' => Carbon::now(), 'total' => 160.00, 'tax' => 28.80, 'customer_name' => 'Isabel Fernandez', 'customer_document_type' => 'RUC', 'customer_document_number' => '10023456789', 'customer_address' => 'Calle Aramburu 101', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 23, 'invoice_type' => 'Boleta', 'series' => 'B012', 'number' => 23, 'issue_date' => Carbon::now(), 'total' => 55.30, 'tax' => 9.95, 'customer_name' => 'Manuel Lopez', 'customer_document_type' => 'DNI', 'customer_document_number' => '66778810', 'customer_address' => 'Av. Iquitos 445', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 24, 'invoice_type' => 'Factura', 'series' => 'F012', 'number' => 24, 'issue_date' => Carbon::now(), 'total' => 95.50, 'tax' => 17.19, 'customer_name' => 'Lucia Vargas', 'customer_document_type' => 'DNI', 'customer_document_number' => '55667722', 'customer_address' => 'Calle El Sol 667', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 25, 'invoice_type' => 'Boleta', 'series' => 'B013', 'number' => 25, 'issue_date' => Carbon::now(), 'total' => 65.00, 'tax' => 11.70, 'customer_name' => 'Raul Ruiz', 'customer_document_type' => 'RUC', 'customer_document_number' => '11812233564', 'customer_address' => 'Av. Lima 789', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 26, 'invoice_type' => 'Factura', 'series' => 'F013', 'number' => 26, 'issue_date' => Carbon::now(), 'total' => 200.00, 'tax' => 36.00, 'customer_name' => 'Carmen Mendoza', 'customer_document_type' => 'DNI', 'customer_document_number' => '22334488', 'customer_address' => 'Calle Pardo 123', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 27, 'invoice_type' => 'Boleta', 'series' => 'B014', 'number' => 27, 'issue_date' => Carbon::now(), 'total' => 120.00, 'tax' => 21.60, 'customer_name' => 'Daniela Perez', 'customer_document_type' => 'RUC', 'customer_document_number' => '11458732678', 'customer_address' => 'Calle Sargento 543', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 28, 'invoice_type' => 'Factura', 'series' => 'F014', 'number' => 28, 'issue_date' => Carbon::now(), 'total' => 145.00, 'tax' => 26.10, 'customer_name' => 'Carlos Soto', 'customer_document_type' => 'DNI', 'customer_document_number' => '44556699', 'customer_address' => 'Av. Puno 880', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 29, 'invoice_type' => 'Boleta', 'series' => 'B015', 'number' => 29, 'issue_date' => Carbon::now(), 'total' => 80.00, 'tax' => 14.40, 'customer_name' => 'Evelyn Díaz', 'customer_document_type' => 'DNI', 'customer_document_number' => '55667788', 'customer_address' => 'Calle Juan 345', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 30, 'invoice_type' => 'Factura', 'series' => 'F015', 'number' => 30, 'issue_date' => Carbon::now(), 'total' => 125.00, 'tax' => 22.50, 'customer_name' => 'Hugo López', 'customer_document_type' => 'RUC', 'customer_document_number' => '10123897654', 'customer_address' => 'Calle San Pedro 101', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 31, 'invoice_type' => 'Boleta', 'series' => 'B016', 'number' => 31, 'issue_date' => Carbon::now(), 'total' => 95.00, 'tax' => 17.10, 'customer_name' => 'Josefina Herrera', 'customer_document_type' => 'DNI', 'customer_document_number' => '66778811', 'customer_address' => 'Av. Tahuantinsuyo 432', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 32, 'invoice_type' => 'Factura', 'series' => 'F016', 'number' => 32, 'issue_date' => Carbon::now(), 'total' => 130.00, 'tax' => 23.40, 'customer_name' => 'Ricardo Silva', 'customer_document_type' => 'RUC', 'customer_document_number' => '90011223344', 'customer_address' => 'Calle 9 de Octubre 123', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 33, 'invoice_type' => 'Boleta', 'series' => 'B017', 'number' => 33, 'issue_date' => Carbon::now(), 'total' => 70.00, 'tax' => 12.60, 'customer_name' => 'Marcela Fernandez', 'customer_document_type' => 'DNI', 'customer_document_number' => '55667789', 'customer_address' => 'Calle Santa Rosa 555', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 34, 'invoice_type' => 'Factura', 'series' => 'F017', 'number' => 34, 'issue_date' => Carbon::now(), 'total' => 180.00, 'tax' => 32.40, 'customer_name' => 'Rafael Gómez', 'customer_document_type' => 'DNI', 'customer_document_number' => '22334466', 'customer_address' => 'Calle Santa Clara 890', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 35, 'invoice_type' => 'Boleta', 'series' => 'B018', 'number' => 35, 'issue_date' => Carbon::now(), 'total' => 60.00, 'tax' => 10.80, 'customer_name' => 'Tomás Hernández', 'customer_document_type' => 'RUC', 'customer_document_number' => '30013457890', 'customer_address' => 'Calle San Felipe 321', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 36, 'invoice_type' => 'Factura', 'series' => 'F018', 'number' => 36, 'issue_date' => Carbon::now(), 'total' => 140.00, 'tax' => 25.20, 'customer_name' => 'Martha López', 'customer_document_type' => 'DNI', 'customer_document_number' => '55443311', 'customer_address' => 'Av. Arequipa 890', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 37, 'invoice_type' => 'Boleta', 'series' => 'B019', 'number' => 37, 'issue_date' => Carbon::now(), 'total' => 85.00, 'tax' => 15.30, 'customer_name' => 'Carlos Arce', 'customer_document_type' => 'DNI', 'customer_document_number' => '44332211', 'customer_address' => 'Calle Washington 678', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 38, 'invoice_type' => 'Factura', 'series' => 'F019', 'number' => 38, 'issue_date' => Carbon::now(), 'total' => 95.00, 'tax' => 17.10, 'customer_name' => 'Adriana Martínez', 'customer_document_type' => 'RUC', 'customer_document_number' => '10098765432', 'customer_address' => 'Calle Los Olivos 234', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 39, 'invoice_type' => 'Boleta', 'series' => 'B020', 'number' => 39, 'issue_date' => Carbon::now(), 'total' => 115.00, 'tax' => 20.70, 'customer_name' => 'Victor Castillo', 'customer_document_type' => 'DNI', 'customer_document_number' => '66778822', 'customer_address' => 'Av. Lurin 456', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 40, 'invoice_type' => 'Factura', 'series' => 'F020', 'number' => 40, 'issue_date' => Carbon::now(), 'total' => 130.00, 'tax' => 23.40, 'customer_name' => 'Nancy Torres', 'customer_document_type' => 'DNI', 'customer_document_number' => '22334433', 'customer_address' => 'Calle Las Malvinas 678', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 41, 'invoice_type' => 'Boleta', 'series' => 'B021', 'number' => 41, 'issue_date' => Carbon::now(), 'total' => 70.50, 'tax' => 12.69, 'customer_name' => 'Patricia Díaz', 'customer_document_type' => 'RUC', 'customer_document_number' => '20987654321', 'customer_address' => 'Av. Surco 789', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 42, 'invoice_type' => 'Factura', 'series' => 'F021', 'number' => 42, 'issue_date' => Carbon::now(), 'total' => 160.00, 'tax' => 28.80, 'customer_name' => 'Ricardo Figueroa', 'customer_document_type' => 'DNI', 'customer_document_number' => '11023345', 'customer_address' => 'Calle Los Nogales 123', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 43, 'invoice_type' => 'Boleta', 'series' => 'B022', 'number' => 43, 'issue_date' => Carbon::now(), 'total' => 75.00, 'tax' => 13.50, 'customer_name' => 'Nicolás Rojas', 'customer_document_type' => 'DNI', 'customer_document_number' => '77665544', 'customer_address' => 'Calle Vía Expresa 234', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 44, 'invoice_type' => 'Factura', 'series' => 'F022', 'number' => 44, 'issue_date' => Carbon::now(), 'total' => 155.00, 'tax' => 27.90, 'customer_name' => 'Sofia Vega', 'customer_document_type' => 'RUC', 'customer_document_number' => '20023345566', 'customer_address' => 'Calle de la Paz 789', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 45, 'invoice_type' => 'Boleta', 'series' => 'B023', 'number' => 45, 'issue_date' => Carbon::now(), 'total' => 50.00, 'tax' => 9.00, 'customer_name' => 'Juan Castro', 'customer_document_type' => 'DNI', 'customer_document_number' => '22334466', 'customer_address' => 'Calle Luis Felipe 567', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 46, 'invoice_type' => 'Factura', 'series' => 'F023', 'number' => 46, 'issue_date' => Carbon::now(), 'total' => 120.00, 'tax' => 21.60, 'customer_name' => 'Fabiola Sánchez', 'customer_document_type' => 'DNI', 'customer_document_number' => '33445577', 'customer_address' => 'Calle Sol 333', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 47, 'invoice_type' => 'Boleta', 'series' => 'B024', 'number' => 47, 'issue_date' => Carbon::now(), 'total' => 88.50, 'tax' => 15.93, 'customer_name' => 'Miguel Moreno', 'customer_document_type' => 'RUC', 'customer_document_number' => '50021345678', 'customer_address' => 'Calle 1 de Mayo 101', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 48, 'invoice_type' => 'Factura', 'series' => 'F024', 'number' => 48, 'issue_date' => Carbon::now(), 'total' => 140.00, 'tax' => 25.20, 'customer_name' => 'Karla Silva', 'customer_document_type' => 'RUC', 'customer_document_number' => '10045326789', 'customer_address' => 'Calle Real 555', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 49, 'invoice_type' => 'Boleta', 'series' => 'B025', 'number' => 49, 'issue_date' => Carbon::now(), 'total' => 65.00, 'tax' => 11.70, 'customer_name' => 'Eduardo Ramos', 'customer_document_type' => 'DNI', 'customer_document_number' => '22334488', 'customer_address' => 'Av. Progreso 789', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 50, 'invoice_type' => 'Factura', 'series' => 'F025', 'number' => 50, 'issue_date' => Carbon::now(), 'total' => 110.00, 'tax' => 19.80, 'customer_name' => 'Victoria Morales', 'customer_document_type' => 'RUC', 'customer_document_number' => '11345327901', 'customer_address' => 'Calle Tacna 100', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 51, 'invoice_type' => 'Boleta', 'series' => 'B026', 'number' => 51, 'issue_date' => Carbon::now(), 'total' => 95.00, 'tax' => 17.10, 'customer_name' => 'Juan Pérez', 'customer_document_type' => 'DNI', 'customer_document_number' => '88776655', 'customer_address' => 'Calle Bolivar 888', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 52, 'invoice_type' => 'Factura', 'series' => 'F026', 'number' => 52, 'issue_date' => Carbon::now(), 'total' => 145.00, 'tax' => 26.10, 'customer_name' => 'Ana Gómez', 'customer_document_type' => 'RUC', 'customer_document_number' => '10458723123', 'customer_address' => 'Av. Grau 555', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 53, 'invoice_type' => 'Boleta', 'series' => 'B027', 'number' => 53, 'issue_date' => Carbon::now(), 'total' => 72.00, 'tax' => 12.96, 'customer_name' => 'Carmen Herrera', 'customer_document_type' => 'DNI', 'customer_document_number' => '66778899', 'customer_address' => 'Calle Piura 456', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 54, 'invoice_type' => 'Factura', 'series' => 'F027', 'number' => 54, 'issue_date' => Carbon::now(), 'total' => 180.00, 'tax' => 32.40, 'customer_name' => 'Carlos Morales', 'customer_document_type' => 'RUC', 'customer_document_number' => '30048764568', 'customer_address' => 'Calle Lima 789', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 55, 'invoice_type' => 'Boleta', 'series' => 'B028', 'number' => 55, 'issue_date' => Carbon::now(), 'total' => 85.50, 'tax' => 15.39, 'customer_name' => 'Mercedes García', 'customer_document_type' => 'DNI', 'customer_document_number' => '44556677', 'customer_address' => 'Calle San Juan 200', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 56, 'invoice_type' => 'Factura', 'series' => 'F028', 'number' => 56, 'issue_date' => Carbon::now(), 'total' => 210.00, 'tax' => 37.80, 'customer_name' => 'Roberto Jiménez', 'customer_document_type' => 'RUC', 'customer_document_number' => '10987654321', 'customer_address' => 'Av. Tacna 432', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 57, 'invoice_type' => 'Boleta', 'series' => 'B029', 'number' => 57, 'issue_date' => Carbon::now(), 'total' => 98.00, 'tax' => 17.64, 'customer_name' => 'Claudia Ramírez', 'customer_document_type' => 'DNI', 'customer_document_number' => '22334499', 'customer_address' => 'Calle Las Flores 678', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 58, 'invoice_type' => 'Factura', 'series' => 'F029', 'number' => 58, 'issue_date' => Carbon::now(), 'total' => 120.50, 'tax' => 21.69, 'customer_name' => 'Antonio Fernández', 'customer_document_type' => 'DNI', 'customer_document_number' => '55667788', 'customer_address' => 'Calle Santa Beatriz 210', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 59, 'invoice_type' => 'Boleta', 'series' => 'B030', 'number' => 59, 'issue_date' => Carbon::now(), 'total' => 62.50, 'tax' => 11.25, 'customer_name' => 'María Elena Soto', 'customer_document_type' => 'RUC', 'customer_document_number' => '10567893211', 'customer_address' => 'Calle Ucayali 500', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 60, 'invoice_type' => 'Factura', 'series' => 'F030', 'number' => 60, 'issue_date' => Carbon::now(), 'total' => 150.00, 'tax' => 27.00, 'customer_name' => 'Eduardo Castro', 'customer_document_type' => 'DNI', 'customer_document_number' => '44332211', 'customer_address' => 'Calle Puno 789', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 61, 'invoice_type' => 'Boleta', 'series' => 'B031', 'number' => 61, 'issue_date' => Carbon::now(), 'total' => 74.00, 'tax' => 13.32, 'customer_name' => 'Antonio López', 'customer_document_type' => 'DNI', 'customer_document_number' => '66778833', 'customer_address' => 'Calle Lima 410', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 62, 'invoice_type' => 'Factura', 'series' => 'F031', 'number' => 62, 'issue_date' => Carbon::now(), 'total' => 160.00, 'tax' => 28.80, 'customer_name' => 'Natalia Vargas', 'customer_document_type' => 'DNI', 'customer_document_number' => '55667799', 'customer_address' => 'Av. Universitaria 123', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 63, 'invoice_type' => 'Boleta', 'series' => 'B032', 'number' => 63, 'issue_date' => Carbon::now(), 'total' => 95.00, 'tax' => 17.10, 'customer_name' => 'Lucas Pérez', 'customer_document_type' => 'RUC', 'customer_document_number' => '30987654123', 'customer_address' => 'Calle Cerro 111', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 64, 'invoice_type' => 'Factura', 'series' => 'F032', 'number' => 64, 'issue_date' => Carbon::now(), 'total' => 230.00, 'tax' => 41.40, 'customer_name' => 'Laura Romero', 'customer_document_type' => 'DNI', 'customer_document_number' => '22334477', 'customer_address' => 'Av. Lima 432', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 65, 'invoice_type' => 'Boleta', 'series' => 'B033', 'number' => 65, 'issue_date' => Carbon::now(), 'total' => 80.00, 'tax' => 14.40, 'customer_name' => 'Pedro Mendoza', 'customer_document_type' => 'DNI', 'customer_document_number' => '55667700', 'customer_address' => 'Calle Real 112', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 66, 'invoice_type' => 'Factura', 'series' => 'F033', 'number' => 66, 'issue_date' => Carbon::now(), 'total' => 110.00, 'tax' => 19.80, 'customer_name' => 'José Sánchez', 'customer_document_type' => 'RUC', 'customer_document_number' => '20223344556', 'customer_address' => 'Av. Ica 876', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 67, 'invoice_type' => 'Boleta', 'series' => 'B034', 'number' => 67, 'issue_date' => Carbon::now(), 'total' => 110.00, 'tax' => 19.80, 'customer_name' => 'Rocío Torres', 'customer_document_type' => 'DNI', 'customer_document_number' => '66778811', 'customer_address' => 'Calle Comercio 444', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 68, 'invoice_type' => 'Factura', 'series' => 'F034', 'number' => 68, 'issue_date' => Carbon::now(), 'total' => 180.00, 'tax' => 32.40, 'customer_name' => 'Ignacio Díaz', 'customer_document_type' => 'DNI', 'customer_document_number' => '22334455', 'customer_address' => 'Av. Jirón 901', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 69, 'invoice_type' => 'Boleta', 'series' => 'B035', 'number' => 69, 'issue_date' => Carbon::now(), 'total' => 95.50, 'tax' => 17.19, 'customer_name' => 'Nerea Castillo', 'customer_document_type' => 'RUC', 'customer_document_number' => '20458763214', 'customer_address' => 'Calle Esperanza 789', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 70, 'invoice_type' => 'Factura', 'series' => 'F035', 'number' => 70, 'issue_date' => Carbon::now(), 'total' => 145.00, 'tax' => 26.10, 'customer_name' => 'Ricardo García', 'customer_document_type' => 'DNI', 'customer_document_number' => '33667788', 'customer_address' => 'Av. Barranco 101', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['order_id' => 71, 'invoice_type' => 'Boleta', 'series' => 'B036', 'number' => 71, 'issue_date' => Carbon::now(), 'total' => 105.00, 'tax' => 18.90, 'customer_name' => 'Sofía Rodríguez', 'customer_document_type' => 'DNI', 'customer_document_number' => '99887766', 'customer_address' => 'Calle Real 500', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    ['order_id' => 72, 'invoice_type' => 'Factura', 'series' => 'F036', 'number' => 72, 'issue_date' => Carbon::now(), 'total' => 130.00, 'tax' => 23.40, 'customer_name' => 'Luis Pérez', 'customer_document_type' => 'RUC', 'customer_document_number' => '20678456321', 'customer_address' => 'Av. Arequipa 800', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    ['order_id' => 73, 'invoice_type' => 'Boleta', 'series' => 'B037', 'number' => 73, 'issue_date' => Carbon::now(), 'total' => 150.00, 'tax' => 27.00, 'customer_name' => 'Ana Mendoza', 'customer_document_type' => 'DNI', 'customer_document_number' => '11223344', 'customer_address' => 'Calle Mariano 333', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    ['order_id' => 74, 'invoice_type' => 'Factura', 'series' => 'F037', 'number' => 74, 'issue_date' => Carbon::now(), 'total' => 175.00, 'tax' => 31.50, 'customer_name' => 'Héctor Fernández', 'customer_document_type' => 'DNI', 'customer_document_number' => '55667700', 'customer_address' => 'Av. Los Olivos 222', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    ['order_id' => 75, 'invoice_type' => 'Boleta', 'series' => 'B038', 'number' => 75, 'issue_date' => Carbon::now(), 'total' => 85.50, 'tax' => 15.39, 'customer_name' => 'María Álvarez', 'customer_document_type' => 'DNI', 'customer_document_number' => '66778833', 'customer_address' => 'Calle Santa Rosa 444', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    ['order_id' => 76, 'invoice_type' => 'Factura', 'series' => 'F038', 'number' => 76, 'issue_date' => Carbon::now(), 'total' => 210.00, 'tax' => 37.80, 'customer_name' => 'José Martínez', 'customer_document_type' => 'RUC', 'customer_document_number' => '30097654321', 'customer_address' => 'Av. Miraflores 101', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    ['order_id' => 77, 'invoice_type' => 'Boleta', 'series' => 'B039', 'number' => 77, 'issue_date' => Carbon::now(), 'total' => 115.00, 'tax' => 20.70, 'customer_name' => 'Carlos Ruiz', 'customer_document_type' => 'DNI', 'customer_document_number' => '33445566', 'customer_address' => 'Calle Urubamba 555', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    ['order_id' => 78, 'invoice_type' => 'Factura', 'series' => 'F039', 'number' => 78, 'issue_date' => Carbon::now(), 'total' => 160.00, 'tax' => 28.80, 'customer_name' => 'Laura Ramírez', 'customer_document_type' => 'DNI', 'customer_document_number' => '77665544', 'customer_address' => 'Calle Conquistadores 888', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    ['order_id' => 79, 'invoice_type' => 'Boleta', 'series' => 'B040', 'number' => 79, 'issue_date' => Carbon::now(), 'total' => 100.00, 'tax' => 18.00, 'customer_name' => 'Juan Sánchez', 'customer_document_type' => 'RUC', 'customer_document_number' => '20248765312', 'customer_address' => 'Calle Chabuca Granda 212', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    ['order_id' => 80, 'invoice_type' => 'Factura', 'series' => 'F040', 'number' => 80, 'issue_date' => Carbon::now(), 'total' => 180.00, 'tax' => 32.40, 'customer_name' => 'María Gómez', 'customer_document_type' => 'DNI', 'customer_document_number' => '22334455', 'customer_address' => 'Av. Las Palmeras 700', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    ['order_id' => 81, 'invoice_type' => 'Boleta', 'series' => 'B041', 'number' => 81, 'issue_date' => Carbon::now(), 'total' => 92.00, 'tax' => 16.56, 'customer_name' => 'Carlos Pérez', 'customer_document_type' => 'DNI', 'customer_document_number' => '99887766', 'customer_address' => 'Calle Alborada 320', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    ['order_id' => 82, 'invoice_type' => 'Factura', 'series' => 'F041', 'number' => 82, 'issue_date' => Carbon::now(), 'total' => 135.00, 'tax' => 24.30, 'customer_name' => 'Rocío Morales', 'customer_document_type' => 'RUC', 'customer_document_number' => '20654398123', 'customer_address' => 'Calle Huancayo 666', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    ['order_id' => 83, 'invoice_type' => 'Boleta', 'series' => 'B042', 'number' => 83, 'issue_date' => Carbon::now(), 'total' => 70.00, 'tax' => 12.60, 'customer_name' => 'Eduardo López', 'customer_document_type' => 'DNI', 'customer_document_number' => '22334477', 'customer_address' => 'Calle Bolívar 777', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    ['order_id' => 84, 'invoice_type' => 'Factura', 'series' => 'F042', 'number' => 84, 'issue_date' => Carbon::now(), 'total' => 195.00, 'tax' => 35.10, 'customer_name' => 'Verónica Díaz', 'customer_document_type' => 'DNI', 'customer_document_number' => '44556688', 'customer_address' => 'Calle San Felipe 123', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    ['order_id' => 85, 'invoice_type' => 'Boleta', 'series' => 'B043', 'number' => 85, 'issue_date' => Carbon::now(), 'total' => 125.00, 'tax' => 22.50, 'customer_name' => 'Antonio Navarro', 'customer_document_type' => 'DNI', 'customer_document_number' => '88997744', 'customer_address' => 'Calle El Sol 111', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    ['order_id' => 86, 'invoice_type' => 'Factura', 'series' => 'F043', 'number' => 86, 'issue_date' => Carbon::now(), 'total' => 250.00, 'tax' => 45.00, 'customer_name' => 'Patricia Fernández', 'customer_document_type' => 'RUC', 'customer_document_number' => '20123345678', 'customer_address' => 'Calle Lima 1010', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    ['order_id' => 87, 'invoice_type' => 'Boleta', 'series' => 'B044', 'number' => 87, 'issue_date' => Carbon::now(), 'total' => 95.00, 'tax' => 17.10, 'customer_name' => 'Manuel Vargas', 'customer_document_type' => 'DNI', 'customer_document_number' => '33445599', 'customer_address' => 'Av. Sol 500', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    ['order_id' => 88, 'invoice_type' => 'Factura', 'series' => 'F044', 'number' => 88, 'issue_date' => Carbon::now(), 'total' => 220.00, 'tax' => 39.60, 'customer_name' => 'Claudia Rodríguez', 'customer_document_type' => 'DNI', 'customer_document_number' => '66778822', 'customer_address' => 'Calle Primavera 900', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    ['order_id' => 89, 'invoice_type' => 'Boleta', 'series' => 'B045', 'number' => 89, 'issue_date' => Carbon::now(), 'total' => 110.00, 'tax' => 19.80, 'customer_name' => 'Javier Pérez', 'customer_document_type' => 'RUC', 'customer_document_number' => '20156743210', 'customer_address' => 'Calle Morro 333', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    ['order_id' => 90, 'invoice_type' => 'Factura', 'series' => 'F045', 'number' => 90, 'issue_date' => Carbon::now(), 'total' => 150.00, 'tax' => 27.00, 'customer_name' => 'Fernando Gómez', 'customer_document_type' => 'DNI', 'customer_document_number' => '88997766', 'customer_address' => 'Calle Fátima 400', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
