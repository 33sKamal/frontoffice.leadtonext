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
        Schema::create('leads', function (Blueprint $table) {
            $table->ulid('id')->primary();

            $table->string('reference')->unique();
            $table->string('phone');

            $table->string('full_name')->nullable()->default(null);

            $table->unsignedTinyInteger('status');
            $table->unsignedTinyInteger('sub_status')->nullable()->default(null);
            $table->unsignedTinyInteger('source');

            $table->json('data')->nullable()->default(null);
            $table->json('call_center_data')->nullable()->default(null);
            $table->dateTime('call_at')->nullable()->default(null);

            $table->unsignedTinyInteger('priority');

            $table->ulid('account_id');
            $table->foreign('account_id')->references('id')->on('accounts')->onDelete('CASCADE');

            $table->ulid('city_id')->nullable()->default(null);
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('CASCADE');

            $table->ulid('country_id')->nullable()->default(null);
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('CASCADE');

            $table->ulid('area_id')->nullable()->default(null);
            $table->foreign('area_id')->references('id')->on('areas')->onDelete('CASCADE');

            $table->string('country_text')->nullable()->default(null);
            $table->string('city_text')->nullable()->default(null);
            $table->string('area_text')->nullable()->default(null);
            $table->unsignedTinyInteger('shipment_way')->nullable()->default(null);

            $table->ulidMorphs('sourceable');

            $table->softDeletes();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
