<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->string('reference');
            $table->uuid('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->float('subtotal', 12, 2);
            $table->text('description');

            $table->float('taxes', 12, 2)->nullable()->defaut(null);
            $table->float('charges', 12, 2)->nullable()->defaut(null);
            $table->float('total', 12, 2)->nullable()->defaut(null);

            $table->dateTime('pending_at')->nullable()->default(null);
            $table->dateTime('un_paid_at')->nullable()->default(null);
            $table->dateTime('paid_at')->nullable()->default(null);
            $table->dateTime('canceled_at')->nullable()->default(null);
            $table->dateTime('refunded_at')->nullable()->default(null);

            $table->json('customer_details');
            $table->json('items_details');

            $table->unsignedTinyInteger('status');

            $table->softDeletes();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
};
