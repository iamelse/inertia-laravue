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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nama produk
            $table->string('code')->unique(); // Kode produk
            $table->unsignedInteger('variant')->default(1); // Jumlah varian
            $table->enum('type', ['Digital', 'Fisik']); // Tipe produk
            $table->foreignId('category_id')->constrained()->cascadeOnDelete(); // Relasi ke kategori
            $table->string('price'); // Harga jual (bisa range)
            $table->string('image')->nullable(); // Foto produk
            $table->boolean('status')->default(true); // Aktif / Nonaktif
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
