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
        Schema::create('menus', function (Blueprint $table) {
            // generate table
            $table->id();
            $table->foreignId('day_id')->constrained('days', 'id')->cascadeOnDelete();
            $table->foreignId('diet_type_id')->constrained('diet_types', 'id')->cascadeOnDelete();

            $table->string('jenis_menu')->nullable();
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
        Schema::dropIfExists('menus');
    }
};
