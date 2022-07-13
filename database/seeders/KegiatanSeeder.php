<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_kegiatan')->insert([
            'id_inovasi' => '1',
            'judul_kegiatan' => 'Sosialisasi Cara Hidup Sehat',
        	'latar_belakang_kegiatan' => 'Sosialisasi ini diberikan dengan tujuan ...',
        	'deskripsi_kegiatan' => 'Kegiatan sosialisasi ini berisi tentang ...',
        	'tujuan_kegiatan' => 'Meningkatkan jumlah angka sehat masyarakat sukoharjo',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'lampiran_kegiatan' => 'Tanpa Lampiran'
        ]);
    }
}
