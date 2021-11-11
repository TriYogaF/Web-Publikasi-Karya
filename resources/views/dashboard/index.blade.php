@extends('dashboard.layouts.main')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Welcome, {{ auth()->user()->name }}</h1>
    </div>
    <div>
      <h4>Artwork</h4>
      <div class="card-group">
        @foreach ($posts as $post)
          <div class="card" style="width: 18rem;">
            @if ($post->image)
              <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" alt="..." />    
            @else
              <img src="https://source.unsplash.com/1280x1080/?{{ $post->category->name }}" class="img-fluid" alt="..." />    
            @endif
            <div class="card-body">
              <h5 class="card-title">{{ $post->title }}</h5>
              <p class="card-text">{!! $post->caption !!}</p>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </main>
@endsection