<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InovasiPegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_inovasi_pegawai')->insert([
        	'id_inovasi' => '1',
        	'id_user' => '1',
        ]);
    }
}
