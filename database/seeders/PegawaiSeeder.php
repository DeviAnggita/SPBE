<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
Use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id_unit' => '1',
            'nip' => '2121021219',
        	'nama_pegawai' => 'Fauzi Nur Hasan',
        	'email_pegawai' => 'fauzienha@gmail.com',
        	'password' => 'fauzienha',
        	'role' => 'User',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

    }
}