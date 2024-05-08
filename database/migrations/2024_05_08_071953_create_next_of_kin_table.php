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
        Schema::create('next_of_kin', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('relationship')->nullable();
            $table->string('job')->nullable();

            $table->string('id_front')->nullable();
            $table->string('id_back')->nullable();
            $table->integer('ssn')->nullable();
            $table->string('city')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('address')->nullable();
            $table->tinyInteger('is_verified')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('next_of_kin');
    }
};
