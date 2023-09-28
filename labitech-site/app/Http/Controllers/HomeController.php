<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('front.home');
    }
    public function visimisi()
    {
        return view('front.visimisi');
    }
    public function certificate()
    {
        return view('front.certificate');
    }
}
