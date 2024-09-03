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
        Schema::create('leads_agents', function (Blueprint $table) {
            $table->ulid('id')->primary();

            $table->ulid('agent_id');
            $table->foreign('agent_id')->references('id')->on('users')->onDelete('CASCADE');

            $table->ulid('lead_id');
            $table->foreign('lead_id')->references('id')->on('leads')->onDelete('CASCADE');

            $table->ulid('account_id');
            $table->foreign('account_id')->references('id')->on('accounts')->onDelete('CASCADE');

            $table->unsignedTinyInteger('priority');

            $table->boolean('locked')->default(false);
            $table->json('data')->nullable()->default(null);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leads_agents');
    }
};
