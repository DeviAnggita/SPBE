<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbUnit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_unit', function (Blueprint $table) {
            $table->increments('id_unit');
            $table->unsignedInteger('id_jenis_unit');
            $table->string('nama_unit', 100);
            $table->string('email_unit', 50);
            $table->string('telepon_unit', 25);
            $table->text('alamat_unit');
            $table->foreign('id_jenis_unit')->references('id_jenis_unit')->on('tb_jenis_unit')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_unit');
    }
}
