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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');

            $table->string('order_name');
            $table->string('category_id');
            $table->string('image');
            $table->string('description');
            $table->foreignId('information_id')->default(1);
            $table->string('note')->default('Catatan akan ditambahkan ketika keterangn diterima atau ditolak');
            // $table->date('date');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
