<?php

namespace App\Http\Controllers;

use App\Models\Artwork;
use Illuminate\Http\Request;

class ArtController extends Controller
{
    public function index(){
        return view('artwork', [
            "title" => "Artwork",
            "posts" => Artwork::all()
        ]);
    }
    public function show($id){
        return view('artpage', [
            "title" => "Artpage",
            "post" => Artwork::find($id)
        ]);
    }
}
