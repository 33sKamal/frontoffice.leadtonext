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
        Schema::create('accounts', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->string('name');
            $table->unsignedTinyInteger('status');
            $table->ulid('user_id')->nullable()->default(null);
            $table->timestamps();
            $table->string('name_unique')->virtualAs("CONCAT(name , '#' , IF(deleted_at IS NULL ,'-',deleted_at))");
            $table->unique('name_unique');

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
