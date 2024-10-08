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
        Schema::create('bmi_histories', function (Blueprint $table) {
            $table->id();
            $table->decimal('weight', 5, 2); // Weight in kg
            $table->decimal('height', 5, 2); // Height in meters
            $table->decimal('bmi', 5, 2)->default(0);
            $table->timestamp('recorded_at')->default(now());
            $table->timestamps();

            $table->foreignId('member_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bmi_histories');
    }
};
