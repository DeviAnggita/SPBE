<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbInovasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_inovasi', function (Blueprint $table) {
            $table->increments('id_inovasi');
            $table->string('judul_inovasi', 200);
            $table->text('latar_belakang');
            $table->text('deskripsi_inovasi');
            $table->text('tujuan_inovasi');
            $table->timestamps();
            $table->string('lampiran_inovasi', 100);
            $table->enum('kategori_inovasi', ['Aplikasi', 'Infrastruktur', 'Keamanan']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_inovasi');
    }
}
