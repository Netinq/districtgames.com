<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Image as ModelsImage;
use Exception;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use PDOException;

class PortfolioController extends Controller
{
    public function index($portfolio = 0, $category = null)
    {
        if ($category == null)
        {
            if ($portfolio == 0) $images = ModelsImage::where('portfolio', 0)->get();
            if ($portfolio == 1) $images = ModelsImage::where('portfolio', 1)->get();
        }
        else
        {
            if ($portfolio == 0) $images = ModelsImage::where('portfolio', 0)->where('category', $category)->get();
            if ($portfolio == 1) $images = ModelsImage::where('portfolio', 1)->where('category', $category)->get();
        }
        $categories = new Collection();
        foreach (ModelsImage::where('portfolio', $portfolio)->get()->unique('category') as $img) {
            $categories->push(Category::where('id', $img->category)->first());
        }
        return view('portfolio', compact('images', 'portfolio', 'categories', 'category'));
    }

    public function store(Request $request)
    {
        if (Session::get('admin') == null) return;
        try {
            $this->validate($request, [
                'title' => 'required|max:250|string',
                'category' => 'required',
                'portfolio' => 'required|min:0|max:1|integer',
                'image' => 'required|mimes:jpeg,jpg,png|max:20000'
            ]);

            $file = Image::make(request('image'));
            Response::make($file->encode('png'));

            $image = new ModelsImage();
            $image->title = request('title');
            $image->category = request('category');
            $image->portfolio = request('portfolio');
            $image->image = $file;
            $image->save();
        } catch (QueryException $e) {
            dd($e);
        } catch (PDOException $e) {
            dd($e);
        }

        return redirect()->back()->with(['message' => 'Image ajouté avec succès !']);
    }

    public function store_category(Request $request)
    {
        if (Session::get(
        'admin') == null) return;
        $this->validate($request, [
            'title' => 'required|max:250|string',
        ]);

        $category = new Category();
        $category->title = request('title');
        $category->save();

        return redirect()->back()->with(['message' => 'Catégorie ajouté avec succès !']);
    }

    public function delete($id)
    {
        if (Session::get('admin') == null) return;
        $image = ModelsImage::where('id', $id)->first();
        $image->delete();

        return redirect()->back()->with(['delete' => 'Image supprimé avec succès !']);
    }

    public function delete_category($id)
    {
        if (Session::get('admin') == null) return;
        $category = Category::where('id', $id)->first();
        $category->delete();

        return redirect()->back()->with(['delete' => 'Catégorie supprimé avec succès !']);
    }
}
