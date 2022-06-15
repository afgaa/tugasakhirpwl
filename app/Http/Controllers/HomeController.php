<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }
    public function class()
    {
        return view('class');
    }

    public function teacher()
    {
        return view('teacher');
    }

    public function galeri()
    {
        return view('galeri');
    }

    public function bloggrid()
    {
        return view('bloggrid');
    }
    public function single()
    {
        return view('single');
    }

    public function contact()
    {
        return view('contact');
    }
}
