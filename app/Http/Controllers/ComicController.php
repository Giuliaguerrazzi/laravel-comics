<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    //
    public function show($id) {
        // return 'detail page' . $id;

        // prendere i dati in config
        $comics = config('comics');

        $comic = [];
        foreach ($comics as $item) {
            if ($id == $item['id']) {
                $comic = $item;
            }
        }

        return view('comics.show', compact('comic'));
    }
}
