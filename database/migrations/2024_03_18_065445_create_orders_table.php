<?php

use App\Enums\Order\OrderStatus;
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
        Schema::create('orders', function (Blueprint $table) {
            $table->ulid('id')->primary();

            $table->string('reference')->unique();
            $table->string('full_name');
            $table->string('phone');
            $table->string('email')->nullable()->default(null);

            $table->ulid('lead_id')->nullable();
            $table->foreign('lead_id')->references('id')->on('leads')->onDelete('SET NULL');

            // New Uopdated columns
            $table->ulid('country_from_id')->nullable();
            $table->foreign('country_from_id')->references('id')->on('countries')->onDelete('SET NULL');

            $table->ulid('city_from_id')->nullable();
            $table->foreign('city_from_id')->references('id')->on('cities')->onDelete('SET NULL');

            $table->unsignedTinyInteger('source');
            $table->ulidMorphs('sourceable');
            $table->unsignedTinyInteger('priority');
            $table->boolean('is_fees_paid_by_customer')->default(false);

            // Comlumn to change
            $table->unsignedTinyInteger('shipment_way')->nullable()->default(null);
            $table->ulid('country_to_id')->nullable();
            $table->foreign('country_to_id')->references('id')->on('countries')->onDelete('SET NULL');

            $table->ulid('city_to_id')->nullable();
            $table->foreign('city_to_id')->references('id')->on('cities')->onDelete('SET NULL');

            // End New Uopdated columns

            $table->string('country_text')->nullable()->default(null);
            $table->string('city_text')->nullable()->default(null);
            $table->string('area_text')->nullable()->default(null);

            $table->ulid('area_id')->nullable();
            $table->foreign('area_id')->references('id')->on('areas')->onDelete('SET NULL');

            $table->text('address');

            $table->boolean('is_moved_to_balance')->default(false);

            $table->dateTime('packed_at')->nullable()->default(null);
            $table->dateTime('shipped_at')->nullable()->default(null);
            $table->dateTime('delivered_at')->nullable()->default(null);
            $table->dateTime('returned_at')->nullable()->default(null);

            $table->unsignedTinyInteger('status')->default(OrderStatus::NEW);
            $table->unsignedTinyInteger('sub_status')->nullable()->default(null);

            $table->ulid('account_id');
            $table->foreign('account_id')->references('id')->on('accounts')->onDelete('CASCADE');
            $table->json('fees')->nullable()->default(null);
            $table->float('sub_total')->nullable()->default(null);
            $table->float('charges')->nullable()->default(null);
            $table->float('total')->nullable()->default(null);

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
