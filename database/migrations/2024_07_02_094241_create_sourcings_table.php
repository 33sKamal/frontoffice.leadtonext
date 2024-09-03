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
        Schema::create('sourcings', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->text('description');
            $table->string('reference');
            $table->float('price');
            $table->unsignedInteger('quantity');
            $table->string('image_url')->nullable();
            $table->string('product_url')->nullable();

            $table->string('country_from');
            $table->string('country_to');

            $table->unsignedTinyInteger('status');

            $table->ulid('account_id');
            $table->foreign('account_id')->references('id')->on('accounts')->onDelete('CASCADE');

            $table->ulid('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sourcings');
    }
};
