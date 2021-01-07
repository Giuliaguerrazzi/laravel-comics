<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
        // return 'HOMEPAGE'

        $comics = config('comics');

        return view('home', compact('comics'));
    }
}
