<?php

namespace Database\Seeders;

use App\Enums\Stock\StockStatus;
use App\Models\Product\Product;
use App\Models\Stock\Stock;
use App\Models\Warehouse\Warehouse;
use Illuminate\Database\Seeder;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = Product::all();
        $warehouses = Warehouse::all();

        foreach ($warehouses as $warehouse) {
            foreach ($products as $product) {
                Stock::create([
                    Stock::ACCOUNT_ID_COLUMN_NAME => $product->account_id,
                    Stock::QUANTITY_COLUMN_NAME => rand(100, 1000),
                    Stock::WARNING_QUANTITY_COLUMN_NAME => rand(10, 30),
                    Stock::STATUS_COLUMN_NAME => StockStatus::ACTIVE,
                    Stock::PRODUCT_ID_COLUMN_NAME => $product->id,
                    Stock::WAREHOUSE_ID_COLUMN_NAME => $warehouse->id,
                ]);
            }
        }
    }
}
