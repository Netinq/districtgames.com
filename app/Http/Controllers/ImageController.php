<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Intervention\Image\Facades\Image;
use App\Annonce;
use App\Models\Image as ModelsImage;

class ImageController extends Controller
{
    function fetch($id)
    {
        $image = ModelsImage::where('id', $id)->first();
        $image_file = Image::make($image->image);
        $response = Response::make($image_file->encode('png'));
        $response->header('Content-Type', 'image/png');

        return $response;
    }

    function fetch_little($id)
    {
        $image = ModelsImage::where('id', $id)->first();
        $image_file = Image::make($image->image);
        $image_file->resize(null, 200, function ($constraint) {
            $constraint->aspectRatio();
        });
        $response = Response::make($image_file->encode('png'));
        $response->header('Content-Type', 'image/png');

        return $response;
    }
}
