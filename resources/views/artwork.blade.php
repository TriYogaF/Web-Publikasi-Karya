
@extends('layouts/main')
@section('css')
    <link rel="stylesheet" href="../css/stylePages.css" />
@endsection

@section('container')
    
    <div class="container">
      {{-- Hero Banner --}}
    @if ($posts->count())
    <div class="card mb-3">
      <img src="{{ $posts[0]->img }}" class="card-img-top" alt="...">
      <div class="card-body text-center">
        <h5 class="card-title"><a href="/artwork/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></h5>
        <p><a href="/authors/{{ $posts[0]->author->username }}" class="text-decoration-none">by {{ $posts[0]->author->name }}</a></p>
        <p class="card-text">{{ $posts[0]->caption }}</p>
        <p class="card-text"><small class="text-muted">Last updated {{ $posts[0]->created_at->diffForHumans() }}</small></p>
      </div>
    </div>
    @else
    <p class="fs-4">no artwork found.</p>
    @endif
    
    <!-- Filter -->
    <div class="wrapper">
      <nav>
        <div class="items">
          <span class="item bg-warning active" data-name="all">All</span>
          <span class="item bg-warning" data-name="nature">Nature</span>
          <span class="item bg-warning" data-name="building">Building</span>
          <span class="item bg-warning" data-name="people">People</span>
          <span class="item bg-warning" data-name="drawing">Drawing</span>
          <span class="item bg-warning" data-name="miniature">Miniature</span>
          <span class="item bg-warning" data-name="abstrak">Abstrak</span>
          <span class="item bg-warning" data-name="pixel">Pixel</span>
        </div>
      </nav>
    </div>
    <!-- Akhir Filter -->
    <!-- Content -->
    <section id="content">
      <div class="container">
        <!-- Popart -->
        <div class="popart my-3 p-3 border border-3 border-success rounded-3">
          @foreach ($posts as $post)
          <div class="image" data-name="{{ $post->data_name }}">
            <span><img src="{{ $post->img }}" alt="" /></span>
            <span><a href="/artwork/{{ $post->slug }}" class="caption py-1">{{ $post->title }}</a></span>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    <!-- Akhir Content -->
    </div>
    
    @endsection
