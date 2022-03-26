<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChartAtasanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chart_atasan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('atasan_id');
            $table->enum('ukuran_atasan',['S','M','L','XL','XXL','XXXL']);
            $table->string('kode_atasan',5);
            $table->integer('lingkar_badan');
            $table->integer('panjang_lengan');
            $table->integer('lebar_dada');
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
        Schema::dropIfExists('chart_atasan');
    }
}
