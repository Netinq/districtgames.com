<?php

namespace App\Http\Controllers;

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
            return view('admin.index');
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
