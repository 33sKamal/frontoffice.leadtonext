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
        Schema::create('stocks', function (Blueprint $table) {
            $table->ulid('id')->primary();

            $table->integer('quantity')->index();
            $table->unsignedInteger('warning_quantity')->index();

            $table->uuid('product_id')->nullable()->default(null);
            $table->foreign('product_id')->references('id')->on('products')->onDelete('CASCADE');
            $table->unsignedTinyInteger('status')->index();

            $table->uuid('warehouse_id')->nullable()->default(null);
            $table->foreign('warehouse_id')->references('id')->on('warehouses')->onDelete('CASCADE');

            $table->ulid('account_id');
            $table->foreign('account_id')->references('id')->on('accounts')->onDelete('CASCADE');

            $table->softDeletes();

            $table->timestamps();

            $table->string('unqiue_row')
                ->virtualAs("CONCAT(product_id , '#',warehouse_id , '#',account_id , '#' , IF(deleted_at IS NULL ,'-',deleted_at))")
                ->invisible();

            $table->unique('unqiue_row');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('warehouses');
    }
};
