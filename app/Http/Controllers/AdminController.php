<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Image;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function index()
    {
        if (Session::get('admin') != null) {

            $categories = Category::all();
            $images = Image::all();
            foreach ($images as $img) {
                $img->portfolio = ($img->portfolio == 0) ? 'DistrictGames' : 'DistrictLight';
                $img->category = Category::where('id', $img->category)->select('title')->first()->title;
            }
            return view('admin.index', compact('categories', 'images'));
        } else return redirect()->route('admin.login');
    }

    public function news()
    {
        if (Session::get('admin') != null) {
            $news = News::all();
            return view('admin.news', compact('news'));
        } else return redirect()->route('admin.login');
    }

    public function check(Request $request)
    {
        $password = config('app.passwd');
        if (request('password') == $password) {
            Session::put('admin', true);
            Session::save();
            return redirect()->route('admin.index');
        }
        return redirect()->back();
    }
}
