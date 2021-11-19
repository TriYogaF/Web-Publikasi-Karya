<?php

namespace App\Http\Controllers;

use App\Models\LiteraturCategory;
use Illuminate\Http\Request;

class AdminLiteraturCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.literaturCategory.index', [
            'categories' => LiteraturCategory::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.literaturCategory.create');
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
            'name' => 'required|unique:literatur_categories|max:255',
            'slug' => 'required|unique:literatur_categories'
        ]);

        LiteraturCategory::create($validatedData);

        return redirect('/dashboard/category/lit')->with('success', 'Kategori Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LiteraturCategory  $literaturCategory
     * @return \Illuminate\Http\Response
     */
    public function show(LiteraturCategory $literaturCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LiteraturCategory  $literaturCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(LiteraturCategory $literaturCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LiteraturCategory  $literaturCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LiteraturCategory $literaturCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LiteraturCategory  $literaturCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(LiteraturCategory $literaturCategory)
    {
        @dd($literaturCategory->id);
        LiteraturCategory::destroy($literaturCategory->id);

        return redirect('/dashboard/category/lit')->with('success', 'Kategori Berhasil Dihapus');
    }
}
