<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('order_products', function (Blueprint $table) {

            $table->ulid('id')->primary();

            $table->uuid('order_id');
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('CASCADE');

            $table->ulid('product_id');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('CASCADE');

            $table->float('price');
            $table->float('quantity');

            $table->ulid('account_id');
            $table->foreign('account_id')->references('id')->on('accounts')->onDelete('CASCADE');

            $table->softDeletes();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_products');
    }
};
