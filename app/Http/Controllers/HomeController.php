<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index() 
    {
        // return 'HOMEPAGE'

        $comics = config('comics');

        // $slug = Str::slug('cars', '-');

        foreach ($comics as $key => $comic) {
            $slug = Str::slug($comic['title'], '-');
            // dump($slug);
            // utilizziamo la key per l'indice e gli assegniamo la variabile slug 
            $comics[$key]['slug'] = $slug; 
        }

        return view('home', compact('comics'));
    }
}
