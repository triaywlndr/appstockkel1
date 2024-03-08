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
        Schema::create('bmasuks', function (Blueprint $table) {
            $table->id();
            $table->date('tglf');
            $table->foreignId('stock_id');
            $table->foreignId('supplier_id');
            $table->integer('mharga');
            $table->integer('mjumlah');
            $table->date('tgld');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bmasuks');
    }
};
