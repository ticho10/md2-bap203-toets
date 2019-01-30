<?php

namespace App\Http\Controllers;

use App\Link;
use Illuminate\Http\Request;

class LinksController extends Controller
{
    public function index(){
        $links = Link::all();
        return view('links', compact('links'));
    }

    public function showLinksForm(){
    return view('linksForm');
    }

    public function handleLinksForm(Request $request){
        $request->validate([
                'title' => 'required|min:8',
                'url'   => 'required|active_url',
                'description' => 'required'
            ]
        );

        $link = new Link;

        $link->title = $request->title;
        $link->url = $request->url;
        $link->description = $request->description;

        $link->save();

        return redirect()->route('link');
}
}
