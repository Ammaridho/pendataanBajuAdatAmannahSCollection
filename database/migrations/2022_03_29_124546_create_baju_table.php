<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBajuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baju', function (Blueprint $table) {
            $table->id();
            $table->string('nama_baju',50);
            $table->enum('jenis_kelamin',['pria','wanita']);
            $table->enum('jenis_baju',['Baju Tari','Baju Adat','Baju Nikah']);
            $table->foreignId('provinsi_id');
            $table->foreignId('atasan_id');
            $table->foreignId('bawahan_id');
            $table->foreignId('kode_aksesoris_id');
            $table->integer('harga_baju');
            $table->integer('persediaan_baju');
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
        Schema::dropIfExists('baju');
    }
}
