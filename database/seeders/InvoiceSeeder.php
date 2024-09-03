<?php

namespace Database\Seeders;

use App\Models\Invoice\Invoice;
use App\Models\Order\Order;
use App\Services\Invoice\InvoiceService;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $orders = Order::take(3)->get();

        $invoiceService = App::make(InvoiceService::class);

        $subtotal = $order->sum(Order::SUB_TOTAL_COLUMN_NAME);
        $taxes = 0;

        foreach ($orders as $order) {
        }

        $total = $subtotal + $taxes;

        $invoiceService->create([
            Invoice::REFERENCE_COLUMN_NAME => 'reference',
            Invoice::USER_ID_COLUMN_NAME => 'user_id',
            Invoice::DESCRIPTION_COLUMN_NAME => 'description',
            Invoice::PENDING_AT_COLUMN_NAME => 'pending_at',
            Invoice::UN_PAID_AT_COLUMN_NAME => 'un_paid_at',
            Invoice::PAID_AT_COLUMN_NAME => 'paid_at',
            Invoice::CANCELED_AT_COLUMN_NAME => 'canceled_at',
            Invoice::REFUNDED_AT_COLUMN_NAME => 'refunded_at',
            Invoice::TAXES_COLUMN_NAME => $taxes,
            Invoice::CHARGES_COLUMN_NAME => $taxes,
            Invoice::TOTAL_COLUMN_NAME => $total,
            Invoice::CUSTOMER_DETAILS_COLUMN_NAME => 'customer_details',
            Invoice::ITEMS_DETAILS_COLUMN_NAME => 'items_details',
            Invoice::STATUS_COLUMN_NAME => 'status',
        ]);
    }
}
