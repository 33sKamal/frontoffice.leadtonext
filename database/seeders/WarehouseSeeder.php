<?php

namespace Database\Seeders;

use App\Enums\Warehouse\WarehouseStatus;
use App\Models\City\City;
use App\Models\Warehouse\Warehouse;
use Illuminate\Database\Seeder;

class WarehouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = City::all();

        $warehouses = [
            [
                'name' => 'Casablanca Warehouse',
                'status' => WarehouseStatus::ACTIVE,
                'address' => '123 Main Street',
                'city_id' => $cities[1 - 1]['id'],

            ],
            [
                'name' => 'London Warehouse',
                'status' => WarehouseStatus::ACTIVE,
                'address' => '456 Park Avenue',
                'city_id' => $cities[2 - 1]['id'],

            ],
            [
                'name' => 'Muscat Warehouse',
                'status' => WarehouseStatus::ACTIVE,
                'address' => '789 Elm Street',
                'city_id' => $cities[3 - 1]['id'],

            ],

        ];

        foreach ($warehouses as $warehouse) {
            Warehouse::create($warehouse);
        }
    }
}
