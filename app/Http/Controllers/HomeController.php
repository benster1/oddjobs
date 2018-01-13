<?php

namespace App\Http\Controllers;

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
        $this->middleware('auth');
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
     public function games()
    {
        return view('games');
    }
     public function stores()
    {
        return view('stores');
    }
     public function groups()
    {
        return view('groups');
    }
     public function forum()
    {
        return view('forum');
    }

}
