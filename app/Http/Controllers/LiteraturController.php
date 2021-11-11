<?php

namespace App\Http\Controllers;

use App\Models\Literatur;
use Illuminate\Http\Request;

class LiteraturController extends Controller
{
    public function index()
    {
        return view('literatur', [
            "title" => "Literatur",
            "active" => "literatur",
            'literaturs' => Literatur::latest()->filter(request(['search']))->paginate(8)
        ]);
    }
    public function show(Literatur $literatur)
    {
        return view('litpage', [
            "title" => "Literatur",
            "active" => "literatur",
            "literatur" => $literatur
        ]);
    }
}
