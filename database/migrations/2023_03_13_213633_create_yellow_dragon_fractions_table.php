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
        Schema::create('yellow_dragon_fractions', function (Blueprint $table) {
            $table->id();
            $table->date('date_of_purchase')->required();
            $table->integer('fraction_number')->required();
            $table->enum('fraction_name', ['100mil*100milmillones'])->default('100mil*100milmillones');
            $table->double('consigned_value')->required(); 
            $table->string('bank_receipt_number')->required(); 
            $table->enum('bank_entity', ['Bancolombia', 'Nequi'])->required();
            $table->string('bank_receipt')->required(); 
            $table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('yellow_dragon_fractions');
    }
};
