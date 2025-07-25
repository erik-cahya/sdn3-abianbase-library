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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('nama_buku')->nullable();
            $table->string('pengarang')->nullable();
            $table->string('penerbit')->nullable();
            $table->string('tempat_terbit')->nullable();
            $table->string('tahun_cetak')->nullable();
            $table->string('kelas')->nullable();
            $table->string('asal_buku')->nullable();
            $table->string('jumlah')->nullable();
            $table->string('tahun_penerimaan')->nullable();
            $table->string('id_kategori')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
