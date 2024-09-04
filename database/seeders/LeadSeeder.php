<?php

namespace Database\Seeders;

use App\Enums\Lead\LeadSource;
use App\Models\Account\Account;
use App\Models\City\City;
use App\Models\Lead\Lead;
use App\Models\LeadProduct\LeadProduct;
use App\Models\Product\Product;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LeadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        // DB::table('lead_products')->delete();
        // DB::table('leads')->delete();

        for ($i = 1; $i <= 1500; $i++) {

            $city = City::with('country')->inRandomOrder()->first();
            $name = $faker->name();
            $email = $faker->email();
            $address = $faker->address();
            $uri = $faker->url();
            $phone = '06'.rand(1000000, 9999999);

            $data = [
                'date' => now()->subDays(rand(5, 10010))->format('d/m/y'),
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'address' => $address,
                'url' => $uri,
                'qty' => rand(3, 5),
                'price' => rand(100, 500),
            ];

            $leadData = [];

            foreach ($data as $key => $value) {
                $leadData[] = [
                    'key' => $key,
                    'value' => $value,
                ];
            }

            $lead = Lead::create([
                Lead::PHONE_COLUMN_NAME => $phone,
                Lead::FULL_NAME_COLUMN_NAME => $name,
                Lead::STATUS_COLUMN_NAME => rand(1, 9),
                Lead::CITY_TO_ID_COLUMN_NAME => $city->id,
                Lead::COUNTRY_TO_ID_COLUMN_NAME => $city->country->id,
                Lead::PRIORITY_COLUMN_NAME => rand(1, 3),
                Lead::DATA_COLUMN_NAME => $leadData,
                Lead::SOURCE_COLUMN_NAME => LeadSource::USER,
                Lead::ACCOUNT_ID_COLUMN_NAME => Account::first()->id,
                Lead::SOURCEABLE_ID_COLUMN_NAME => User::first()->id,
                Lead::SOURCEABLE_TYPE_COLUMN_NAME => User::class,
            ]);

            $products = Product::inRandomOrder()->take(rand(1, 4))->get();

            foreach ($products as $product) {
                LeadProduct::create([
                    LeadProduct::PRODUCT_ID_COLUMN_NAME => $product->id,
                    LeadProduct::LEAD_ID_COLUMN_NAME => $lead->id,
                    LeadProduct::ACCOUNT_ID_COLUMN_NAME => $lead->getAccountId(),
                    LeadProduct::PRICE_COLUMN_NAME => rand(3, 100),
                    LeadProduct::QUANTITY_COLUMN_NAME => rand(1, 10),
                ]);
            }
        }

        // Login the first use
        Auth::login(User::first());
    }
}
