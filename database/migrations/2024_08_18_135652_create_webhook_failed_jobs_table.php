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
        Schema::create('webhook_failed_jobs', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->ulid('webhook_id');
            $table->json('payload');
            $table->text('error_message')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('webhook_id')->references('id')->on('webhooks')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('webhook_failed_jobs');
    }
};
