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
        Schema::create('sheets', function (Blueprint $table) {
            $table->ulid('id')->primary();

            $table->ulid('account_id');
            $table->foreign('account_id')->references('id')->on('accounts')->onDelete('CASCADE');

            $table->string('name', 30)->index();
            $table->unsignedTinyInteger('tries')->default(0);
            $table->string('sheet_link', 120);
            $table->string('google_api_key');
            $table->string('phone_key_name');
            $table->string('sku_key_name');
            $table->boolean('status');
            $table->unsignedSmallInteger('cursor')->default(2);
            $table->timestamp('watched_at')->nullable();

            $table->softDeletes();

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sheets');
    }
};
