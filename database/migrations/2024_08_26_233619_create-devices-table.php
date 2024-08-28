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
        Schema::create('devices', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->boolean('automated_feed')->default(false);
            $table->string('servo_control', 10)->default('close');
            $table->decimal('latitude', 9, 6)->default(0);
            $table->decimal('longitude', 9, 6)->default(0);
            $table->mediumInteger('uid');
            $table->timestamps();

            $table->foreign('uid')->references('id')->on('users');
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
