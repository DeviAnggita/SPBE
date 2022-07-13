<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InovasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_inovasi')->insert([
            'judul_inovasi' => 'Aplikasi Sukoharjo Sehat',
            'latar_belakang' => 'Aplikasi untuk menjalankan program sukoharjo sehat',
        	'deskripsi_inovasi' => 'Aplikasi Sukoharjo Sehat adalah aplikasi yang ......',
        	'tujuan_inovasi' => 'Meningkatkan indeks kesehatan masyarakat Sukoharjo',
        	'lampiran_inovasi' => 'Tanpa Lampiran',
        	'kategori_inovasi' => 'Aplikasi',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

    }
}
