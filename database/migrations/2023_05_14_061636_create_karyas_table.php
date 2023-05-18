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
        Schema::create('karyas', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->foreignId('user_id');
            $table->foreignId('kategori_id');
            $table->string('gambar');
            $table->string('bahan');
            $table->string('ukuran');
            $table->string('tahun');
            $table->text('deskripsi');
            $table->foreignId('status_id');
            $table->timestamp('publishes_at')->nullable(); //tipe data timpstamp
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karyas');
    }
};
