<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbArtikel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_artikel', function (Blueprint $table) {
            $table->increments('id_artikel');
            $table->unsignedInteger('id_user');
            $table->string('judul_artikel', 200);
            $table->text('isi_artikel');
            $table->string('lampiran_artikel', 100);
            $table->string('status', 10);
            $table->string('approved', 10);
            $table->timestamps();
            $table->dateTime('publish_at');
            $table->unsignedInteger('id_sub_kategori');
            $table->foreign('id_user')->references('id_user')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_sub_kategori')->references('id_sub_kategori')->on('tb_sub_kategori')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_artikel');
    }
}
