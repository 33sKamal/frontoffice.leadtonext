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
        Schema::create('products', function (Blueprint $table) {
            $table->ulid('id')->primary();

            $table->string('name', 60)->nullable()->default(null);
            $table->longText('description')->nullable()->default(null);

            $table->string('sku', 100)->index();
            $table->unsignedTinyInteger('status')->index();

            $table->float('purchase_price')->default(0);
            $table->float('price')->default(0);

            $table->float('weight')->nullable()->default(null);
            $table->float('width')->nullable()->default(null);
            $table->float('height')->nullable()->default(null);
            $table->float('length')->nullable()->default(null);

            $table->uuid('category_id')->nullable()->default(null);
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('SET NULL');

            $table->ulid('account_id');
            $table->foreign('account_id')->references('id')->on('accounts')->onDelete('CASCADE');

            $table->string('unqiue_row')
                ->virtualAs("CONCAT(sku , '#',account_id , '#' , IF(deleted_at IS NULL ,'-',deleted_at))")
                ->invisible();

            $table->unique('unqiue_row');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
