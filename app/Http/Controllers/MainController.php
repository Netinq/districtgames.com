<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MainController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function infos()
    {
        $news = News::all();
        return view('infos', compact('news'));
    }

    public function legal()
    {
        return view('legal');
    }

    public function shop()
    {
        return view('shop');
    }
}
