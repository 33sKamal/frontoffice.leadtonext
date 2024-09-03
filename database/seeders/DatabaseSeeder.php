<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        if (App::environment('production') == true) {
            $this->callProductionSeeder();
        }

        if (App::environment('production') == false) {
            $this->callNonProductionSeeder();
        }
    }

    private function callProductionSeeder(): void
    {
        dump('seeding the data for live ');
        $this->call([
            RoleSeeder::class,
            PermissionSeeder::class,
        ]);
    }

    private function callNonProductionSeeder(): void
    {
        $this->call([
            AccountSeeder::class,
            RoleSeeder::class,
            PermissionSeeder::class,
            UserSeeder::class,

            CategorySeeder::class,
            LocationSeeder::class,
            ProductSeeder::class,
            WarehouseSeeder::class,
            StockSeeder::class,

            LeadSeeder::class,
            LeadHistorySeeder::class,
            OrderSeeder::class,
            OrderHistorySeeder::class,
            SheetSeeder::class,
            ZrexpressSeeder::class,

        ]);
    }
}
