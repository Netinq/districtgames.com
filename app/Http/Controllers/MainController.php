<?php

namespace App\Http\Controllers;

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
        return view('infos');
    }

    public function portfolio()
    {
        return view('portfolio');
    }
}
