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
        Schema::create('order_shipping_trackings', function (Blueprint $table) {
            $table->ulid('id')->primary();

            $table->ulid('order_id')->nullable();
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('CASCADE');

            $table->ulid('account_id');
            $table->foreign('account_id')->references('id')->on('accounts')->onDelete('CASCADE');

            $table->unsignedTinyInteger('status');

            $table->json('payload')->nullable()->default(null);

            $table->ulidMorphs('action_by');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_shipping_trackings');
    }
};
