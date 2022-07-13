<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbKegiatan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_kegiatan', function (Blueprint $table) {
            $table->increments('id_kegiatan');
            $table->unsignedInteger('id_inovasi');
            $table->string('judul_kegiatan', 200);
            $table->text('latar_belakang_kegiatan');
            $table->text('deskripsi_kegiatan');
            $table->text('tujuan_kegiatan');
            $table->timestamps();
            $table->string('lampiran_kegiatan', 100);
            $table->foreign('id_inovasi')->references('id_inovasi')->on('tb_inovasi')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_kegiatan');
    }
}
