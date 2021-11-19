<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtworkCategory;
use Cviebrock\EloquentSluggable\Services\SlugService;

class AdminArtworkCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.artworkcategory.index', [
            'categories' => ArtworkCategory::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.artworkcategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:artwork_categories|max:255',
            'slug' => 'required|unique:artwork_categories'
        ]);

        ArtworkCategory::create($validatedData);

        return redirect('/dashboard/category/artwork')->with('success', 'Kategori Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ArtworkCategory  $artworkCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ArtworkCategory $artworkCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ArtworkCategory  $artworkCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ArtworkCategory $artworkCategory)
    {
        return view('dashboard.artworkcategory.edit',[
            'category' => $artworkCategory
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ArtworkCategory  $artworkCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ArtworkCategory $artworkCategory)
    {
        $rules = [
            'name' => 'required|unique:artwork_categories|max:255',
        ];
        
        if($request->slug != $artworkCategory->slug) {
            $rules['slug'] = 'required|unique:artwork_categories';
        }
        
        $validatedData = $request->validate($rules);
        
        ArtworkCategory::where('id', $artworkCategory->id)
            ->update($validatedData);

        return redirect('/dashboard/category/artwork')->with('success', 'Kategori Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ArtworkCategory  $artworkCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ArtworkCategory $artworkCategory)
    {
        ArtworkCategory::destroy($artworkCategory->id);

        return redirect('/dashboard/category/artwork')->with('success', 'Kategori Berhasil Dihapus');
    }

    public function cek(Request $request){
        $slug = SlugService::createSlug(ArtworkCategory::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
