<?php

namespace App\Http\Controllers;

use App\Models\Artwork;
use Illuminate\Http\Request;

class ArtworkController extends Controller
{   
    public function index()
    {           
        return view('artwork', [
            "title" => "Artwork",
            "active" => "artwork",
            "posts" => Artwork::latest()->filter(request(['search']))->paginate()
        ]);
    }
    public function show(Artwork $art)
    {
        return view('artpage', [
            "title" => "Artpage",
            "active" => "artwork",
            "post" => $art
        ]);
    }
}
