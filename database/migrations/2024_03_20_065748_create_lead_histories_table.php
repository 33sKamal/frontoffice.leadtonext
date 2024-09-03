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
        Schema::create('lead_histories', function (Blueprint $table) {
            $table->ulid('id')->primary();

            $table->ulid('account_id');
            $table->foreign('account_id')->references('id')->on('accounts')->onDelete('CASCADE');

            $table->uuid('lead_id');
            $table->foreign('lead_id')->references('id')->on('leads')->onDelete('CASCADE');

            $table->unsignedTinyInteger('status_from');
            $table->unsignedTinyInteger('status_to');

            $table->ulidMorphs('historyable');

            $table->json('payload')->nullable()->default(null);

            $table->softDeletes();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lead_histories');
    }
};
