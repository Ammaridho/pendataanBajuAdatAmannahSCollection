<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelasiBarangProvinsiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relasi_barang_provinsi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('atasan_id')->nullable();
            $table->foreignId('bawahan_id')->nullable();
            $table->foreignId('aksesoris_id')->nullable();
            $table->foreignId('provinsi_id');
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
        Schema::dropIfExists('relasi_barang_provinsi');
    }
}
