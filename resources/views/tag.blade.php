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
      <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
    </ol>
  </nav>
  {{-- Akhir Breadcrumb --}}
    <!-- Content -->
    <section id="content">
      <div class="container bg-white">
        
        <a class="btn" href="/tag/{art:data_name}" role="button">
            <div class="card bg-light text-dark">
                <img src="../assets/index/1.gif" class="card-img" alt="...">
                <div class="card-img-overlay">
                  <h5 class="card-title ">Card title</h5>
                </div>
            </div>
        </a>

      </div>
    </section>
    <!-- Akhir Content -->
    
@endsection

