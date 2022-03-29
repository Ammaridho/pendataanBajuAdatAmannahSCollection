<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtasanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atasan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_atasan',50);
            $table->string('gambar_atasan',50)->nullable();
            $table->text('keterangan_atasan');
            $table->integer('persediaan_atasan');
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
        Schema::dropIfExists('atasan');
    }
}
