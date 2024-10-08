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
        Schema::create('zrexpresses', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger('IDWilaya');

            $table->uuid('city_id');
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('CASCADE');

            $table->float('Domicile');
            $table->float('Stopdesk');
            $table->float('Annuler');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('zrexpresses');
    }
};
