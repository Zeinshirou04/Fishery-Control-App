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
        Schema::create('environmental_data', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('water_ph');
            $table->decimal('water_temp', 3, 1);
            $table->unsignedTinyInteger('water_humid');
            $table->foreignUuid('device_id')->references('id')->on('devices');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
