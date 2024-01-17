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
        Schema::create('diet_schedules', function (Blueprint $table) {
            // generate table
            $table->id();
            // $table->foreignId('day_id')->constrained('days', 'id')->cascadeOnDelete()->nullable();
            // $table->foreignId('menu_id')->constrained('menus', 'id')->cascadeOnDelete()->nullable();
            $table->foreignId('diet_type_id')->constrained('diet_types', 'id')->cascadeOnDelete()->nullable();
            // $table->foreignId('user_id')->constrained('users', 'id')->cascadeOnDelete();

            $table->string('nama_hari')->nullable();
            $table->text('deskripsi')->nullable();
            $table->text('sarapan')->nullable();
            $table->text('snack_pagi')->nullable();
            $table->text('makan_siang')->nullable();
            $table->text('snack_sore')->nullable();
            $table->text('makan_malam')->nullable();

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
        Schema::dropIfExists('diet_schedules');
    }
};
