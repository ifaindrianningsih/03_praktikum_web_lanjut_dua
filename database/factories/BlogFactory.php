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
            'gambar'=>'img/img-01.jpg',
            'judul'=>'Simple and useful HTML layout',
            'isi'=>'There is a clickable image with beautiful hover effect and active title link for each post item. Left side is a sticky menu bar. Right side is a blog content that will scroll up and down.',
            'tanggal'=>'2020-06-24',
            'pembuat'=>'by Luluk Mufida'
        ];
    }
}
