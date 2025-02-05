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
        Schema::table('coupon', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('discount');
            $table->dateTime('created_day');
            $table->dateTime('expired_day');
            $table->integer('amount');
            $table->integer('grant_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coupon');
    }
};