@extends('layouts/main')  
@section('css')
  <link rel="stylesheet" href="../css/styleArtPage.css" />
@endsection
    
@section('container')
  <a class="mt-5 pt-5" href="/art">Kembali</a>
    <!-- Content -->
    <section id="content">
      <div class="container">
        <!-- Popart -->
        <div class="box bg-light">
          <img src="../assets/artwork/a1.jpg" class="img-fluid" alt="..." />
          <figure class="text-center">
            <blockquote class="blockquote">
              <p>A well-known quote, contained in a blockquote element.</p>
            </blockquote>
            <figcaption class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></figcaption>
          </figure>
        </div>
      </div>
    </section>
    <!-- Akhir Content -->
    
@endsection

