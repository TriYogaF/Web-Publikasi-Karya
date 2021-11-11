@extends('layouts/main')  
@section('css')
  <link rel="stylesheet" href="../css/styleArtPage.css" />
@endsection
    
@section('container')
  {{-- Breadcrumb --}}
  <nav class="bg-light" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a class="text-decoration-none text-dark" href="/">Home</a></li>
      <li class="breadcrumb-item"><a class="text-decoration-none text-dark" href="/artwork">Literatur</a></li>
      <li class="breadcrumb-item active" aria-current="page">{{ $literatur->title }}</li>
    </ol>
  </nav>
  {{-- Akhir Breadcrumb --}}
    <!-- Content -->
    <section id="content">
      <div class="container">
        <!-- Popart -->
        <div class="box bg-light my-3 p-1">
          @if ($literatur->image)
                <img src="{{ asset('storage/' . $literatur->image) }}" class="img-fluid" alt="..." />    
              @else
                <img src="https://source.unsplash.com/1280x1080/?{{ $literatur->category->name }}" class="card-img-top" alt="..." />    
              @endif
          <figure class="text-center">
            <h4 class="mt-1">{{ $literatur->title }}</h4>
            <figcaption class="blockquote">{!! $literatur->caption !!}</figcaption>
            <figcaption class="blockquote-footer"><a href="/authors/{{ $literatur->author->username }}">{{ $literatur->author->name }}</a></figcaption>
          </figure>
          <div>
              <p class="p-3">{!! $literatur->body !!}</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Content -->
    
@endsection

