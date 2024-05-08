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
            $table->bigIncrements('id');
            $table->foreignId('user_id');
            $table->string('account_number')->unique();
            $table->double('ledger_balance')->default(0.00);
            $table->double('available_balance')->default(0.00);
            $table->boolean('status')->default(true);
            $table->boolean('is_shielded')->default(true);
            $table->boolean('hasOfficer')->default(false);
            $table->timestamps();

            $table->index('user_id');
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
