<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class BlogSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('table_blog')->insert(
            [
            'topik'=>'PEMROGRAMAN',
            'judul'=>'Pemrograman Web Lanjut',
            'isi'=>'Melatih kemampuan ngoding abcdef',
            'tanggal'=>'2022-03-08',
            'pembuat'=>'Ifa dan Irma'
            ]
        );
    }
}
