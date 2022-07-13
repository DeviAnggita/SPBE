<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id_user');
            $table->unsignedInteger('id_unit');
            $table->bigInteger('nip');
            $table->string('nama_pegawai', 100);
            $table->string('email_pegawai', 100)->unique();
            $table->string('password');
            $table->enum('role', ['Super Admin', 'Admin', 'User'])->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('id_unit')->references('id_unit')->on('tb_unit')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}