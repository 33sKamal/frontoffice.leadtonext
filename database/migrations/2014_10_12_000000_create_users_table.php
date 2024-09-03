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
        Schema::create('users', function (Blueprint $table) {
            $table->ulid('id')->primary();

            $table->string('full_name');
            $table->string('phone')->nullable()->default(null);
            $table->string('whatsapp_phone')->nullable()->default(null);
            $table->string('email')->nullable()->default(null);
            $table->string('company')->nullable()->default(null);
            $table->unsignedTinyInteger('status');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->dateTime('last_lead_assigned_at')->nullable()->default(null);

            $table->ulid('account_id');
            $table->foreign('account_id')->references('id')->on('accounts')->onDelete('CASCADE');

            $table->timestamps();
            $table->softDeletes();

            $table->string('email_unique')->virtualAs("CONCAT(email , '#' , IF(deleted_at IS NULL ,'-',deleted_at))");
            $table->unique('email_unique');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
