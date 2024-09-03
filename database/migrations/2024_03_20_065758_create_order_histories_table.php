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
        Schema::create('order_histories', function (Blueprint $table) {

            $table->ulid('id')->primary();

            $table->uuid('order_id');
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('CASCADE');

            $table->unsignedTinyInteger('status_from');
            $table->unsignedTinyInteger('status_to');

            $table->unsignedTinyInteger('sub_status_from')->nullable()->default(null);
            $table->unsignedTinyInteger('sub_status_to')->nullable()->default(null);

            $table->json('payload')->nullable()->default(null);

            $table->ulid('account_id');

            $table->foreign('account_id')->references('id')->on('accounts')->onDelete('CASCADE');
            $table->nullableUlidMorphs('historyable');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_histories');
    }
};
