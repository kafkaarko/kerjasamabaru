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
        Schema::create('gudang', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('location')->nullable();
            $table->timestamps();
        });
        
        Schema::create('kategori_item', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
        
        Schema::create('stock', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('category');
            $table->string('size');
            $table->string('color');
            $table->unsignedBigInteger('gudang_id');
            $table->integer('quantity');
            $table->timestamps();
        
            $table->foreign('gudang_id')->references('id')->on('gudang')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock');
    }
};
