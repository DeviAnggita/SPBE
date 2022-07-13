<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_unit')->insert([
        	'id_jenis_unit' => '1',
        	'nama_unit' => 'Dinas Kesehatan',
        	'email_unit' => 'dinaskesehatan@gmail.com',
        	'telepon_unit' => '08123456789',
            'alamat_unit' => 'Jalan Dokter Muwardi No.66, Mojo, Gayam, Kec. Sukoharjo, Kabupaten Sukoharjo, Jawa Tengah 57514',
        ]);

    }
}
