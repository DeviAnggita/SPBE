<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbInovasiPegawai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_inovasi_pegawai', function (Blueprint $table) {
            $table->increments('id_inovasi_pegawai');
            $table->unsignedInteger('id_inovasi');
            $table->unsignedInteger('id_user');
            $table->foreign('id_inovasi')->references('id_inovasi')->on('tb_inovasi')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_user')->references('id_user')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_inovasi_pegawai');
    }
}
