<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\MenuItem;
use App\Models\PaymentMethod;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            RolesPermisosSeeder::class,
            UserSeeder::class,
            SettingsSeeder::class,

            CategorySeeder::class,
            SupplierSeeder::class,
            UnitSeeder::class,
            SizeSeeder::class,
            // PaymentMethodSeeder::class,
            TableSeeder::class,
            CustomersSeeder::class,
            EmployeeSeeder::class,

            ReservationsSeeder::class,
            MenuItemSeeder::class,

            MenuItemSizeSeeder::class,






            InventoryItemSeeder::class,
            MenuItemSeeder::class
        ]);
    }
}
