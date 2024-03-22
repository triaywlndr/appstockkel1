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
        Schema::create('bkeluars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tglf_id');
            $table->foreignId('stock_id');
            $table->integer('kharga');
            $table->foreignId('pelanggan_id');
            $table->foreignId('pelanggan_id');
            $table->enum('pembayaran',['Cash','Kredit']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bkeluars');
    }
};
