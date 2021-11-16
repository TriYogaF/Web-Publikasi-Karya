@extends('dashboard.layouts.main')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Welcome, {{ auth()->user()->name }}</h1>
    </div>
    <div>
      <div class="my-lg-3 bg-white p-3">
        <h4>Artwork</h4>
        <div class="row row-cols-1 row-cols-md-4 g-4 ">
          @foreach ($posts as $post)
          <div class="col">
              <div class="card" style="width: 18rem;">
                @if ($post->image)
                <div style="max-height: 720px; overflow:hidden">
                  <img src="{{ asset('storage/' . $post->image) }}" style="max-width: 100%;
                  height: auto;" class="img-fluid" alt="..." />    
                </div>
                @else
                  <img src="https://source.unsplash.com/1280x720/?{{ $post->category->name }}" class="card-img-top" alt="..." />    
                @endif
                <div class="card-body">
                  <h5 class="card-title">{{ $post->title }}</h5>
                </div>
              </div>
            </div>
            @endforeach
        </div>
      </div>
      <div class="my-lg-3 bg-white p-3">
        <h4>Literatur</h4>
        <div class="row row-cols-1 row-cols-md-4 g-4">
          @foreach ($literaturs as $literatur)
          <div class="col">
              <div class="card" style="width: 18rem;">
                @if ($literatur->image)
                <div style="max-height: 720px; overflow:hidden">
                  <img src="{{ asset('storage/' . $literatur->image) }}" style="max-width: 100%;
                  height: auto;" class="img-fluid" alt="..." />    
                </div>
                @else
                  <img src="https://source.unsplash.com/1280x720/?{{ $literatur->category->name }}" class="card-img-top" alt="..." />    
                @endif
                <div class="card-body">
                  <h5 class="card-title">{{ $literatur->title }}</h5>
                </div>
              </div>
            </div>
            @endforeach
        </div>
      </div>

    </div>
  </main>
@endsection