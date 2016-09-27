<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Link;

class LinksController extends Controller
{
    public function view(Link $link)
    {
        return view('links.view', [
            'link' => $link,
        ]);
    }

    public function create()
    {
        return view('links.create');
    }

    public function storeNew(Request $request)
    {
        $this->validate($request, [
            'url' => 'required|active_url|unique:links,url',
            'title' => 'required|min:2|max:255',
            'author' => 'min:2|max:50',
        ]);

        $link = new Link($request->all());
        $link->save();

        return redirect('/');
    }

    public function remove(Link $link)
    {
        return view('links.remove', [
            'link' => $link,
        ]);
    }

    public function delete(Link $link)
    {
        $link->delete();

        return redirect('/');
    }
}
