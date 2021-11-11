@extends('layouts/main')  
@section('css')
  <link rel="stylesheet" href="../css/styleArtPage.css" />
@endsection
    
@section('container')
  {{-- Breadcrumb --}}
  <nav class="bg-light" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a class="text-decoration-none text-dark" href="/">Home</a></li>
      <li class="breadcrumb-item"><a class="text-decoration-none text-dark" href="#">Authors</a></li>
      <li class="breadcrumb-item active" aria-current="page">{{ $author->name }}</li>
    </ol>
  </nav>
  {{-- Akhir Breadcrumb --}}
    <!-- Content -->
    <section id="content">
      <div class="container">
        <!-- Popart -->
        <div class="box bg-light text-center border border-2 rounded mb-5">
          <h1 class="my-3">Halaman Author</h1>
          <div class="card mb-3 mx-3">
            <img src="../assets/index/hu.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $title }}</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>

          <h3>Artwork</h3>
          <div class="popart my-3 p-3 ">
            @foreach ($posts as $post)
            <div class="image" data-name="{{ $post->data_name }}">
              <span>
                @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" alt="..." />    
              @else
                <img src="https://source.unsplash.com/1280x1080/?{{ $post->category->name }}" class="card-img-top" alt="..." />    
              @endif
              </span>
              <span><a href="/artwork/{{ $post->slug }}" class="caption py-1">{{ $post->title }}</a></span>
            </div>
            @endforeach
          </div>
          
          <h3>Literatur</h3>
          <div class="popart my-3 p-3 ">
            @foreach ($literaturs as $literatur)
            <div class="image" data-name="{{ $literatur->data_name }}">
              <span>
                @if ($literatur->image)
                <img src="{{ asset('storage/' . $literatur->image) }}" class="img-fluid" alt="..." />    
              @else
                <img src="https://source.unsplash.com/1280x1080/?{{ $literatur->category->name }}" class="card-img-top" alt="..." />    
              @endif
              </span>
              <span><a href="/artwork/{{ $literatur->slug }}" class="caption py-1">{{ $literatur->title }}</a></span>
            </div>
            @endforeach
          </div>

        </div>
      </div>
    </section>
    <!-- Akhir Content -->
    
@endsection

