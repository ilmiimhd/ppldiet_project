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
        Schema::create('dietary_preferences', function (Blueprint $table) {
            // generate table
            $table->id();
            $table->foreignId('user_id')->constrained('users', 'id')->cascadeOnDelete();
            $table->foreignId('food_category_id')->constrained('food_categories', 'id')->cascadeOnDelete();

            $table->string('jenis_diet')->nullable();
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
        Schema::dropIfExists('dietary_preferences');
    }
};
