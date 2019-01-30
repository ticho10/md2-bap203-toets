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

}
}
