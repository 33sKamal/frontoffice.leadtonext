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
        Schema::create('notifications', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->unsignedSmallInteger('type');
            $table->ulidMorphs('notifiable');
            $table->unsignedTinyInteger('count_repeat')->default(1);
            $table->string('hash');
            $table->text('data');

            $table->ulid('account_id');
            $table->foreign('account_id')->references('id')->on('accounts')->onDelete('CASCADE');
            $table->timestamp('read_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};
