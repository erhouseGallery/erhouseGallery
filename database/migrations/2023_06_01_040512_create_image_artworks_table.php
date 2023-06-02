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
        Schema::create('image_artworks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('artwork_id');
            $table->string('path');
            $table->foreign('artwork_id')->references('id')->on('artworks')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('image_artworks');
    }
};
