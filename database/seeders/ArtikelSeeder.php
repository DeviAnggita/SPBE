<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_artikel')->insert([
        	'id_artikel' => '1',
        	'id_user' => '1',
        	'judul_artikel' => 'Peringati Hari Kesehatan Nasional ke-57',
        	'isi_artikel' => 'Menteri Kesehatan Budi Gunadi Sadikin memimpin upacara peringatan Hari Kesehatan Nasional ke-57 di Auditorium Siwabessy pada Jumat (12/11).
 
            Peringatan upacara HKN ini turut dihadiri pejabat tinggi madya, pratama serta pegawai di lingkungan Kemenkes dan seluruh insan kesehatan di pelosok Tanah Air yang mengikuti secara daring di kanal Youtube Kemenkes RI.',
            'lampiran_artikel' => 'abc.img',
            'status' => 'Public',
            'approved' => 'Yes',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'publish_at' => date('Y-m-d H:i:s'),
            'id_sub_kategori' => '1',
        ]);

    }
}
