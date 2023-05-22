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
        Schema::create('live_broadcasts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_divisi')->constrained('divisions')->onUpdate('cascade')->onDelete('restrict');
            $table->text('deskripsi');
            $table->boolean('is_live')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('live_broadcasts');
    }
};
