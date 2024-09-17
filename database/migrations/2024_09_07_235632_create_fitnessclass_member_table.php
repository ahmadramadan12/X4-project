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
        Schema::create('fitnessclass_member', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

           
            $table->foreignId('member_id')->constrained()->onDelete('cascade');
            $table->foreignId('fitnessclass_id')->constrained('fitnessclasses')->onDelete('cascade');
        });
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fitnessclass_member');
    }
};
