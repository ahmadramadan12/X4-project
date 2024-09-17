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
        Schema::create('fitnessclasses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->unsignedBigInteger('trainer_id');
            $table->string('category');
            $table->integer('duration'); 
            $table->string('frequency'); 
            $table->time('start_time');
            $table->time('end_time');
            $table->string('location');
            $table->string('status')->default('Active');
            $table->timestamps();
        });
    }
        

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fitnessclasses');
    }
};
