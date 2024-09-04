<?php

namespace Database\Seeders;

use App\Enums\Order\OrderFeeEnum;
use App\Enums\Order\OrderShipmentWayEnum;
use App\Enums\Order\OrderSourceEnum;
use App\Enums\Order\OrderStatus;
use App\Models\Country\Country;
use App\Models\Lead\Lead;
use App\Models\Order\Order;
use App\Models\OrderProduct\OrderProduct;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        DB::table('order_products')->delete();
        DB::table('orders')->delete();

        $countLeads = Lead::count();
        $user = User::first();
        $account = User::first()->account;

        $leads = Lead::take($countLeads - 70)->get();
        foreach ($leads as $index => $lead) {

            $name = $faker->name();
            $email = $faker->email();
            $address = $faker->address();
            $uri = $faker->url();
            $phone = '+212'.rand(6, 8).rand(70000000, 99999999);

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

            $data = collect($data)->mapWithKeys(function ($v, $k) {
                return [
                    'key' => $k,
                    'value' => $v,
                ];
            });
            $country = Country::has('cities')->inRandomOrder()->first();
            // $data,
            $order = Order::create([

                Order::LEAD_ID_COLUMN_NAME => $lead->getKey(),
                Order::FULL_NAME_COLUMN_NAME => 'User '.($index + 1),
                Order::PHONE_COLUMN_NAME => $phone,
                Order::EMAIL_COLUMN_NAME => 'email'.($index + 1),

                Order::COUNTRY_TO_ID_COLUMN_NAME => $country->id,
                Order::CITY_TO_ID_COLUMN_NAME => $country->cities->first()->id,
                Order::AREA_ID_COLUMN_NAME => $country->cities->first()?->areas?->first()?->id,
                Order::ADDRESS_COLUMN_NAME => 'a address',

                Order::STATUS_COLUMN_NAME => OrderStatus::NEW,
                Order::ACCOUNT_ID_COLUMN_NAME => $lead->getAccountId(),
                Order::SHIPMENT_WAY_COLUMN_NAME => OrderShipmentWayEnum::TO_HOME,
                Order::SOURCE_COLUMN_NAME => OrderSourceEnum::USER,
                Order::SOURCEABLE_ID_COLUMN_NAME => $user->id,
                Order::SOURCEABLE_TYPE_COLUMN_NAME => User::class,
                Order::PRIORITY_COLUMN_NAME => $account->getOrderPriority(),
            ]);

            $lead = Lead::inRandomOrder()->first();

            $subTotal = 0;
            foreach ($lead->products as $p) {

                OrderProduct::create([
                    OrderProduct::ORDER_ID_COLUMN_NAME => $order->id,
                    OrderProduct::PRODUCT_ID_COLUMN_NAME => $p->id,
                    OrderProduct::PRICE_COLUMN_NAME => $p->pivot->price,
                    OrderProduct::QUANTITY_COLUMN_NAME => $p->pivot->quantity,
                    OrderProduct::ACCOUNT_ID_COLUMN_NAME => $lead->getAccountId(),
                ]);
                $subTotal += $p->pivot->quantity * $p->pivot->price;
            }

            $fees = [];

            foreach (OrderFeeEnum::getValues() as $key => $orderFeekey) {
                $fees[] = [
                    'key' => $orderFeekey,
                    'value' => rand($key + 1, $key + 1 + rand(1, 4)),
                ];
            }

            $charges = collect($fees)->reduce(fn ($a, $b) => $a + $b['value'], 0);

            $total = $subTotal + $charges;

            $order->update([
                Order::SUB_TOTAL_COLUMN_NAME => $subTotal,
                Order::FEES_COLUMN_NAME => $fees,
                Order::CHARGES_COLUMN_NAME => $charges,
                Order::TOTAL_COLUMN_NAME => $total,
            ]);
        }

        // Login the first use
        Auth::login(User::first());
    }
}
