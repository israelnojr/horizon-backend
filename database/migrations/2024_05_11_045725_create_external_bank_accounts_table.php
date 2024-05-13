<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * this schema if for linking external banks account ia plaid
     */
    public function up(): void
    {
        Schema::create('external_bank_accounts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string("bankId");
            $table->string("accountId");
            $table->string("accessToken");
            $table->string("fundingSourceUrl");
            $table->string("shareableId");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('external_bank_accounts');
    }
};
