<?php

namespace App\Http\Controllers;

use App\Models\Artwork;
use Illuminate\Http\Request;

class ArtworkController extends Controller
{
    public function index(){
        return view('artwork', [
            "title" => "Artwork",
            "posts" => Artwork::latest()->get()
        ]);
    }
    public function show(Artwork $art){
        return view('artpage', [
            "title" => "Artpage",
            "post" => $art
        ]);
    }
}
