
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
        Schema::create('areas', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->string('name', 60);

            $table->uuid('city_id')->nullable()->default(null);
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('SET NULL');
            $table->unsignedTinyInteger('status')->index();

            $table->unique(['name', 'city_id']);

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
