<?php

namespace Database\Seeders;

use App\Enums\Role\RoleEnum;
use App\Models\Order\Order;
use App\Models\OrderHistory\OrderHistory;

use Illuminate\Database\Seeder;

class OrderHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $orders = Order::take(30)->get();

        $user = User::role(RoleEnum::MANAGER)->first();

        foreach ($orders as $order) {

            for ($i = 0; $i < rand(2, 4); $i++) {

                $orderStatus = rand(1, 5);

                OrderHistory::create([

                    OrderHistory::ACCOUNT_ID_COLUMN_NAME => $order->getAccountId(),

                    OrderHistory::ORDER_ID_COLUMN_NAME => $order->getKey(),

                    OrderHistory::STATUS_FROM_COLUMN_NAME => $orderStatus,

                    OrderHistory::STATUS_TO_COLUMN_NAME => $orderStatus + 1,

                    // OrderHistory::PAYLOAD_COLUMN_NAME => '',

                    OrderHistory::HISTORYABLE_ID_COLUMN_NAME => $user->getKey(),

                    OrderHistory::HISTORYABLE_TYPE_COLUMN_NAME => User::class,

                ]);
            }
        }
    }
}
