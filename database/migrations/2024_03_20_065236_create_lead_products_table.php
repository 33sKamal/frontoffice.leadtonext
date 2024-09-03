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
        Schema::create('lead_products', function (Blueprint $table) {

            $table->ulid('id')->primary();
            $table->ulid('account_id');
            $table->foreign('account_id')->references('id')->on('accounts')->onDelete('CASCADE');

            $table->ulid('lead_id');
            $table->foreign('lead_id')->references('id')->on('leads')->onDelete('CASCADE');

            $table->ulid('product_id');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('CASCADE');

            $table->float('price');
            $table->float('quantity');
            $table->softDeletes();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lead_products');
    }
};
