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
        Schema::create('restaurant', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('bio');
            $table->float('rating');
            $table->float('delivery_cost');
            $table->string('delivery_vehicle');
            $table->integer('delivery_time');
            $table->float('lat');
            $table->float('long');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restaurant');
    }
};