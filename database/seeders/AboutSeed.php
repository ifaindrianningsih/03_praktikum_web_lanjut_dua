<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class AboutSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('table_about')->insert(
            [
                'topik'=>'Pemrograman Web Lanjut',
                'judul'=>'Belajar Laravel dengan Model View',
                'isi'=>'Melatih skill pemrograman menggunakan framework laravel'
                
                ]
            );
    }
}
