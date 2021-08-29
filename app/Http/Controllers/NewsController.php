<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

class NewsController extends Controller
{
    public function store(Request $request)
    {
        if (Session::get('admin') == null) return;
        $this->validate($request, [
            'title' => 'required|max:250|string',
            'content' => 'required|string',
            'image' => 'required|mimes:jpeg,jpg,png|max:20000'
        ]);

        $file = Image::make(request('image'));
        Response::make($file->encode('png'));

        $news = new News();
        $news->title = request('title');
        $news->content = request('content');
        $news->image = $file;
        $news->save();

        return redirect()->back()->with(['message' => 'Article ajouté avec succès !']);
    }

    public function delete($id)
    {
        if (Session::get('admin') == null) return;

        $news = News::where('id', $id)->first();
        $news->delete();

        return redirect()->back()->with(['delete' => 'Article supprimé avec succès !']);
    }
}
