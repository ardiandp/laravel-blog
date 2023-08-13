<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->id();
            $table->string('kodeproduk')->unique();
            $table->string('nama_produk');
            $table->string('nama_produk_seo')->unique();
            $table->unsignedBigInteger('kategori_id');
            $table->text('keterangan')->nullable();
            $table->decimal('harga', 10, 2);
            $table->integer('stok');
            $table->decimal('berat', 5, 2);
            $table->string('gambar')->nullable();
            $table->enum('status', ['Aktif', 'Nonaktif'])->default('Aktif');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produk');
    }
};
