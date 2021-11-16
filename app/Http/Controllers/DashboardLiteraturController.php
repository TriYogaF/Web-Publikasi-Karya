<?php

namespace App\Http\Controllers;

use App\Models\Literatur;
use Illuminate\Http\Request;
use App\Models\LiteraturCategory;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardLiteraturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.literatur.index',[
            'literaturs' => Literatur::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.literatur.create' ,[
            'categories' => LiteraturCategory::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // @dd($request->title);
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:literaturs',
            'category_id' => 'required',
            'image' => 'image',
            'body' => 'required'
        ]);

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('literatur-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Literatur::create($validatedData);

        return redirect('/dashboard/literatur')->with('success', 'Literatur Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Literatur $literatur
     * @return \Illuminate\Http\Response
     */
    public function show(Literatur $literatur)
    {
        return view('dashboard.literatur.show',[
            'literatur' => $literatur
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Literatur $literatur)
    {
        return view('dashboard.literatur.edit',[
            'literatur' => $literatur,
            'categories' => LiteraturCategory::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Literatur $literatur)
    {
        $rules = [
            'title' => 'required|max:255',
            'category_id' => 'required',
            'image' => 'image',
            'body' => 'required'
        ];
        
        if($request->slug != $literatur->slug) {
            $rules['slug'] = 'required|unique:literaturs';
        }
        
        $validatedData = $request->validate($rules);
        
        if($request->file('image')){
            if($request->oldLiteratur){
                Storage::delete($request->oldLiteratur);
            }
            $validatedData['image'] = $request->file('image')->store('literatur-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Literatur::where('id', $literatur->id)
            ->update($validatedData);

        return redirect('/dashboard/literatur')->with('success', 'Literatur Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Literatur $literatur)
    {
        if($literatur->image){
            Storage::delete($literatur->image);
        }

        Literatur::destroy($literatur->id);

        return redirect('/dashboard/literatur')->with('success', 'Literatur Berhasil Dihapus');
    }

    public function cek(Request $request){
        $slug = SlugService::createSlug(Literatur::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
