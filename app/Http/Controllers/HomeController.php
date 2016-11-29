<?php

namespace vkuint\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function comiision()
    {
        return view('comission');
    }

    public function newsall()
    {
        return view('newsall');
    }

    public function news()
    {
        return view('news');
    }
}
