<?php

namespace App\Http\Controllers;

use App\Link;

class LinksController extends Controller
{
    public function view(Link $link)
    {
        return view('links.view', compact('link'));
    }
}
