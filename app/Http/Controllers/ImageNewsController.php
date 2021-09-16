<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Intervention\Image\Facades\Image;
use App\Annonce;
use App\Models\News;

class ImageNewsController extends Controller
{
    function fetch($id)
    {
        $news = News::where('id', $id)->first();
        $image_file = Image::make($news->image);
        $response = Response::make($image_file->encode('png'));
        $response->header('Content-Type', 'image/png');

        return $response;
    }

    function fetch_little($id)
    {
        $news = News::where('id', $id)->first();
        $image_file = Image::make($news->image);
        $image_file->resize(null, 150, function ($constraint) {
            $constraint->aspectRatio();
        });
        $response = Response::make($image_file->encode('png'));
        $response->header('Content-Type', 'image/png');

        return $response;
    }

    function fetch_size($id, $size)
    {
        $news = News::where('id', $id)->first();
        $image_file = Image::make($news->image);
        $image_file->resize(null, $size, function ($constraint) {
            $constraint->aspectRatio();
        });
        $response = Response::make($image_file->encode('png'));
        $response->header('Content-Type', 'image/png');

        return $response;
    }
}