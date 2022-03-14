<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Kategori;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data=Blog::limit(6)->get();
        //$arr = json_decode(json_encode($data), true);
        $kategori = Kategori::all();
        //$arr1 = json_decode(json_encode($kategori), true);
        return view('home', ['title' => 'Home'],compact('data','kategori'));
    }
}