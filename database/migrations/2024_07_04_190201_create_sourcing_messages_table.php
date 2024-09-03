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
        Schema::create('sourcing_messages', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->text('payload');

            $table->unsignedTinyInteger('type');

            $table->ulid('sourcing_id');
            $table->foreign('sourcing_id')->references('id')->on('sourcings')->onDelete('CASCADE');

            $table->ulid('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE');

            $table->dateTime('read_at')->nullable()->default(null);

            $table->ulid('account_id');
            $table->foreign('account_id')->references('id')->on('accounts')->onDelete('CASCADE');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sourcing_messages');
    }
};
