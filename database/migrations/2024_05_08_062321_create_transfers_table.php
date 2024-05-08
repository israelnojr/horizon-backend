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
        Schema::create('transfers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('transaction_id');
            $table->foreignId('receiverBank_id')->nullable();
            $table->string('senderBank_id')->nullable();
            $table->string('routing_numb')->nullable();
            $table->double('amount');
            $table->double('charges')->nullable();
            $table->string('ref');
            $table->text('desc');
            $table->string('type');
            $table->string('bank_address')->nullable();
            $table->string('recipient_address')->nullable();
            $table->string('recipient_name')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('status')->default('Pending');
            $table->boolean('isCredit')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transfers');
    }
};
