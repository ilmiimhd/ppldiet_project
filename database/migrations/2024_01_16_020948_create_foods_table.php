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
        Schema::create('foods', function (Blueprint $table) {
            // generate table
            $table->id();
            $table->foreignId('food_category_id')->constrained('food_categories', 'id')->cascadeOnDelete();

            $table->string('nama_makanan')->nullable();
            $table->integer('kalori')->nullable();
            $table->integer('karbohidrat')->nullable();
            $table->integer('protein')->nullable();
            $table->integer('lemak')->nullable();
            $table->integer('serat')->nullable();
            $table->text('deskripsi')->nullable();

            // generate created_at and updated_at
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foods');
    }
};
