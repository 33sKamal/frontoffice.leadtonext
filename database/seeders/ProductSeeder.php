<?php

namespace Database\Seeders;

use App\Enums\Product\ProductStatus;
use App\Models\Category\Category;
use App\Models\Product\Product;

use App\Services\Product\ProductService;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $sku1 = 'hyQemGZPG3';
        $sku2 = 'vjodPcWnJf';
        $sku3 = 'fkqCRGwKzW';
        $productService = App::make(ProductService::class);
        $user = User::first();

        for ($i = 1; $i < 60; $i++) {

            $category = Category::inRandomOrder()->first();

            $sku = Str::random(10);
            if ($i == 1) {
                $sku = $sku1;
            }
            if ($i == 2) {
                $sku = $sku2;
            }
            if ($i == 3) {
                $sku = $sku3;
            }
            $purshaePr = rand(10, 100);

            $p = $productService->create(data: [
                Product::NAME_COLUMN_NAME => "Product $i",
                Product::DESCRIPTION_COLUMN_NAME => "Description of product $i",
                Product::SKU_COLUMN_NAME => $sku,
                Product::STATUS_COLUMN_NAME => ProductStatus::ACTIVE,
                Product::PURCHASE_PRICE_COLUMN_NAME => $purshaePr,
                Product::PRICE_COLUMN_NAME => $purshaePr + rand(5, 10),
                Product::CATEGORY_ID_COLUMN_NAME => $category->id,
                Product::WEIGHT_COLUMN_NAME => rand(1, 100),
                Product::WIDTH_COLUMN_NAME => rand(1, 100),
                Product::HEIGHT_COLUMN_NAME => rand(1, 100),
                Product::LENGTH_COLUMN_NAME => rand(1, 100),
            ],
                accountId : $user->account_id
            );
        }
    }
}
