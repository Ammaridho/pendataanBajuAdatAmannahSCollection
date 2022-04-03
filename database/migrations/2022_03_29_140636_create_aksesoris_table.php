<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAksesorisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aksesoris', function (Blueprint $table) {
            $table->id();
            $table->string('nama_aksesoris',50);
            $table->string('kode_aksesoris',5);
            $table->string('gambar_aksesoris',50)->nullable();
            $table->integer('persediaan_aksesoris');
            $table->text('keterangan_aksesoris')->nullable();
            $table->integer('harga_aksesoris');
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
        Schema::dropIfExists('aksesoris');
    }
}
