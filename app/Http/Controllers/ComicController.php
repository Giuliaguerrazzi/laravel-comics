<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    //
    public function show($id) {
        return 'detail page' . $id;
    }
}
