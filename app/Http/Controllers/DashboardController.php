<?php

namespace App\Http\Controllers;

use App\Models\Artwork;
use App\Models\Literatur;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public  function index()
    {
        return view('dashboard.index',[
            "title" => "dashboard",
            "active" => "dashboard",
            'posts' => Artwork::where('user_id', auth()->user()->id)->get(),
            'literaturs' => Literatur::where('user_id', auth()->user()->id)->get()
        ]);
    }
}
