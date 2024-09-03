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
        Schema::create('countries', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->string('name', 60);

            $table->char('iso_code', 2)->nullable()->default(null);
            $table->char('iso3_code', 3)->nullable()->default(null);
            $table->char('currency_code', 3)->nullable()->default(null);
            $table->string('phone_code')->nullable()->default(null);
            $table->unsignedTinyInteger('status')->index();

            $table->softDeletes();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('countries');
    }
};
