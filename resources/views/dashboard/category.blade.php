@extends('dashboard.layouts.main')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Welcome Administrator, {{ auth()->user()->name }}</h1>
    </div>
    <div>
        <h4>Category</h4>
        <div>
            <a href="/dashboard/category/art" class="btn bg-info">Artwork</span></a>
            <a href="/dashboard/category/lit" class="btn bg-info">Literatur</span></a>
        </div>
    </div>
  </main>
@endsection