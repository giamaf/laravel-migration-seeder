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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('firm', 50)->unique();
            $table->string('departure_city', 25);
            $table->string('arrival_city', 25);
            $table->dateTime('departure_time');
            $table->dateTime('arrival_time');
            $table->char('train_code', 6)->unsigned()->unique();
            $table->char('vagon_number', 1)->unsigned();
            $table->boolean('on_time')->default(1);
            $table->boolean('deleted')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};