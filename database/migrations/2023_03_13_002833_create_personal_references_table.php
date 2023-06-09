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
        Schema::create('personal_references', function (Blueprint $table) {
            $table->id();
            $table->string('name')->required();
            $table->string('documentid');
            $table->string('email')->required();
            $table->string('mobile');
            $table->string('address');
            $table->string('country');
            $table->string('city');
            $table->enum('type-of-reference', ['personal', 'emergency', 'security'])->nullable()->default('personal');
            $table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_references');
    }
};
