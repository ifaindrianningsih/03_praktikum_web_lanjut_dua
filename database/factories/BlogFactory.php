<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Blog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'topik'=>'PEMROGRAMAN',
            'judul'=>'Pemrograman Web Lanjut',
            'isi'=>'Melatih kemampuan ngoding',
            'tanggal'=>'2022-03-08',
            'pembuat'=>'Ifa dan Irma'
        ];
    }
}