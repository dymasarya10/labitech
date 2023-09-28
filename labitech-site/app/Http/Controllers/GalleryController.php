<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function index()
    {
        $image_all = Gallery::Paginate(3);
        return view('front.gallery_image', compact('image_all'));
    }
}
