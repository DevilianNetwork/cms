<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dummy($width, $height, $type, $code): Response
    {
        // $width = isset($request->width) ? $request->width : 640;
        // $height = isset($request->height) ? $request->height : 320;
        // $color = isset($request->color) ? $request->color : fake()->hexColor();
        // $type = isset($request->type) ? $request->type : 'webp';

        $img = \Image::canvas($width, $height, fake()->hexColor());
        return $img->response($type);
    }

}
