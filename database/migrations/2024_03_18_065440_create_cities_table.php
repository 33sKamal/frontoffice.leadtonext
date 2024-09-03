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
        Schema::create('cities', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->string('name', 60);

            $table->uuid('country_id')->nullable()->default(null);
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('SET NULL');
            $table->unsignedTinyInteger('status')->index();

            $table->unsignedTinyInteger('code')->nullable()->default(null);

            $table->unique(['name', 'country_id']);

            $table->softDeletes();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cities');
    }
};
