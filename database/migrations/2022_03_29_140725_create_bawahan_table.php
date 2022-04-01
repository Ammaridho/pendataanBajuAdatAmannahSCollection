<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBawahanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bawahan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_bawahan',50);
            $table->string('gambar_bawahan',50)->nullable();
            $table->text('keterangan_bawahan')->nullable();
            $table->integer('persediaan_bawahan');
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
        Schema::dropIfExists('bawahan');
    }
}
