<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChartBawahanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chart_bawahan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bawahan_id');
            $table->enum('ukuran_bawahan',['S','M','L','XL','XXL','XXXL']);
            $table->string('kode_bawahan',5);
            $table->integer('lingkar_pinggang');
            $table->integer('panjang_kaki');
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
        Schema::dropIfExists('chart_bawahan');
    }
}
