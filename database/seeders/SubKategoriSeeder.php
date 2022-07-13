<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubKategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tb_sub_kategori')->insert([
        	'id_kategori' => '1',
        	'nama_sub_kategori' => 'Manajemen SPBE',
        ]);

    }
}
