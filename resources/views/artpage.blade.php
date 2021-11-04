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
        <div class="box bg-light">
          <img src="{{ $post->img }}" class="img-fluid" alt="..." />
          <figure class="text-center">
            <h5 class="mt-1">{{ $post->title }}</h5>
            <figcaption class="blockquote">Someone famous in Source Title</figcaption>
            <figcaption class="blockquote-footer"><a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a></figcaption>
            
          </figure>
        </div>
      </div>
    </section>
    <!-- Akhir Content -->
    
@endsection

