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
      <li class="breadcrumb-item active" aria-current="page">Artwork contoh</li>
    </ol>
  </nav>
  {{-- Akhir Breadcrumb --}}
    <!-- Content -->
    <section id="content">
      <div class="container">
        <!-- Popart -->
        <div class="box bg-light">
          <h1>Halaman Author</h1>
        </div>
      </div>
    </section>
    <!-- Akhir Content -->
    
@endsection

