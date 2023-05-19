<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;


class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome') ;
    }
    public function about()
    {
        return view('about') ;
    }
    public function blog()
    {
        return view('blog') ;
    }
    public function contact()
    {
        return view('contact') ;
    }

}
