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
        Schema::create('patiant_lists', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('phone');
            $table->string('village')->nullable();
            $table->string('gender')->nullable();
            $table->string('treatment');
            $table->string('treatment_status')->nullable();
            $table->decimal('totle_fees', 10, 2)->nullable();
            $table->decimal('paid_fees', 10, 2)->nullable();
            $table->decimal('pending_fees', 10, 2)->nullable();
            $table->date('next_schedule_date')->nullable();
            $table->enum('progress', ['active', 'done'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patiant_lists');
    }
};
