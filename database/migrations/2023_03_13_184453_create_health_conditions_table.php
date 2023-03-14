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
        Schema::create('health_conditions', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_disability')->default(false);
            $table->text('disability')->nullable();
            $table->text('allergies')->nullable();
            $table->boolean('any_disease')->default(false);
            $table->string('disease')->nullable();
            $table->boolean('any_medicine')->default(false);
            $table->string('medicine')->nullable();
            $table->boolean('any_foodrestriction')->default(false);
            $table->string('foodrestriction')->nullable();            
            $table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('health_conditions');
    }
};
