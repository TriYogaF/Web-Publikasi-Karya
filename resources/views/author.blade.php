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

          <div class="popart my-3 p-3 ">
              <h3>Artwork</h3>
            <div class="wrapper">
                <nav>
                  <div class="items">
                    <span class="item bg-info active" data-name="all">All</span>
                    <span class="item bg-info" data-name="nature">Nature</span>
                    <span class="item bg-info" data-name="building">Building</span>
                    <span class="item bg-info" data-name="people">People</span>
                    <span class="item bg-info" data-name="drawing">Drawing</span>
                    <span class="item bg-info" data-name="miniature">Miniature</span>
                    <span class="item bg-info" data-name="abstrak">Abstrak</span>
                    <span class="item bg-info" data-name="pixel">Pixel</span>
                  </div>
                </nav>
            </div>
            @foreach ($posts as $post)
            <div class="image" data-name="{{ $post->data_name }}">
              <span><img src="{{ $post->img }}" alt="" /></span>
              <span><a href="/artwork/{{ $post->slug }}" class="caption py-1">{{ $post->title }}</a></span>
            </div>
            @endforeach
          </div>

          {{-- <div class="row mb-3 mx-3">
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Artwork</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="/authors/{{ $author->username }}/art" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Literatur</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary ">Go somewhere</a>
                </div>
              </div>
            </div>
          </div> --}}
        </div>
      </div>
    </section>
    <!-- Akhir Content -->
    
@endsection

