<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class KategoriSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = ['Travel.Events','Creative.Design.Bussines','Music.Audio','Artwork.Design','Creative.Video.Audio','Visual.Artworks'];
        for($i = 0; $i<5; $i++){
            DB::table('table_kategori')->insert(['nama'=>$array[$i]]);
        }
    }
}
