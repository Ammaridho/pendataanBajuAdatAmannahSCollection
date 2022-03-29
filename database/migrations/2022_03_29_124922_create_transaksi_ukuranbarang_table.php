<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiUkuranbarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_ukuranbarang', function (Blueprint $table) {
            $table->id();
            $table->foreignId('keranjang_id');
            $table->foreignId('chart_atasan_id');
            $table->foreignId('chart_bawahan_id');
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
        Schema::dropIfExists('transaksi_ukuranbarang');
    }
}
