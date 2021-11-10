@extends('layouts/main')  
@section('css')
  <link rel="stylesheet" href="../css/styleArtPage.css" />
@endsection
    
@section('container')
  {{-- Breadcrumb --}}
  <nav class="bg-light" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a class="text-decoration-none text-dark" href="/">Home</a></li>
      <li class="breadcrumb-item"><a class="text-decoration-none text-dark" href="/artwork">Artwork</a></li>
      <li class="breadcrumb-item active" aria-current="page">{{ $post->title }}</li>
    </ol>
  </nav>
  {{-- Akhir Breadcrumb --}}
    <!-- Content -->
    <section id="content">
      <div class="container">
        <!-- Popart -->
        <div class="box bg-light my-3 p-1">
          @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" alt="..." />    
              @else
                <img src="https://source.unsplash.com/1280x1080/?{{ $post->category->name }}" class="card-img-top" alt="..." />    
              @endif
          <figure class="text-center">
            <h4 class="mt-1">{{ $post->title }}</h4>
            <figcaption class="blockquote">{!! $post->caption !!}</figcaption>
            <figcaption class="blockquote-footer"><a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a></figcaption>
          </figure>
        </div>
      </div>
    </section>
    <!-- Akhir Content -->
    
@endsection

