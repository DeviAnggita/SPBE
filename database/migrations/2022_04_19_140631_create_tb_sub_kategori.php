<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbSubKategori extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_sub_kategori', function (Blueprint $table) {
            $table->increments('id_sub_kategori');
            $table->unsignedInteger('id_kategori');
            $table->string('nama_sub_kategori', 100);
            $table->foreign('id_kategori')->references('id_kategori')->on('tb_kategori')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_sub_kategori');
    }
}
