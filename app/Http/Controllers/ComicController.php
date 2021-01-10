<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ComicController extends Controller
{
    //
    public function show($slug) {
        // return 'detail page' . $id;

        // prendere i dati in config
        $comics = config('comics');

        $comic = [];
        foreach ($comics as $item) {
            
            // conversione dall'item a titolo
            $titleConverted = Str::slug($item['title'], '-');

            if($slug == $titleConverted) {
                $comic = $item;
                break;
            }
        }

        if (empty($comic)){
             abort(404);
        }

        //dd($comic);
        return view('comics.show', compact('comic'));

    } 
}
