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
        Schema::create('daily_progress', function (Blueprint $table) {
            // generate table
            $table->id();
            $table->foreignId('diet_schedule_id')->constrained('diet_schedules', 'id')->cascadeOnDelete();

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
        Schema::dropIfExists('daily_progress');
    }
};
