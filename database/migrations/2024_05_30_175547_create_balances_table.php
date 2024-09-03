<?php

use App\Enums\Balance\BalanceStatus;
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
        Schema::create('balances', function (Blueprint $table) {

            $table->ulid('id')->primary();

            $table->ulid('account_id');
            $table->foreign('account_id')->references('id')->on('accounts')->onDelete('CASCADE');

            $table->ulid('user_id')->nullable()->default(null);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE');

            $table->decimal('total', 10, 2)->default(0);
            $table->decimal('charges', 10, 2)->default(0);
            $table->decimal('hold', 10, 2)->default(0);
            $table->decimal('pending', 10, 2)->default(0);
            $table->decimal('paid', 10, 2)->default(0);

            $table->unsignedTinyInteger('status')->default(BalanceStatus::ACTIVE);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('balances');
    }
};
