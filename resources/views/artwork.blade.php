@extends('layouts/main')
@section('css')
    <link rel="stylesheet" href="../css/stylePages.css" />
@endsection

@section('container')
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
          <div class="image" data-name="drawing">
            <span><img src="../assets/artwork/a1.jpg" alt="" /></span>
            <span><a href="/artpage" class="caption py-1">Artwork 1</a></span>
          </div>
          <div class="image" data-name="drawing">
            <span><img src="../assets/artwork/a2.jpg" alt="" /></span>
            <span><a href="#" class="caption py-1">Artwork 2</a></span>
          </div>
          <div class="image" data-name="nature">
            <span><img src="../assets/artwork/a3.jpg" alt="" /></span>
            <span><a href="#" class="caption py-1">Artwork 3</a></span>
          </div>
          <div class="image" data-name="abstrak">
            <span><img src="../assets/artwork/a4.jpg" alt="" /></span>
            <span><a href="#" class="caption py-1">Artwork 4</a></span>
          </div>
          <div class="image" data-name="nature">
            <span><img src="../assets/artwork/a5.jpg" alt="" /></span>
            <span><a href="#" class="caption py-1">Artwork 5</a></span>
          </div>
          <div class="image" data-name="people">
            <span><img src="../assets/artwork/a6.jpg" alt="" /></span>
            <span><a href="#" class="caption py-1">Artwork 6</a></span>
          </div>
          <div class="image" data-name="nature">
            <span><img src="../assets/artwork/a7.jpg" alt="" /></span>
            <span><a href="#" class="caption py-1">Artwork 7</a></span>
          </div>
          <div class="image" data-name="miniature">
            <span><img src="../assets/artwork/a8.jpg" alt="" /></span>
            <span><a href="#" class="caption py-1">Artwork 8</a></span>
          </div>
          <div class="image" data-name="building">
            <span><img src="../assets/artwork/a9.jpg" alt="" /></span>
            <span><a href="#" class="caption py-1">Artwork 9</a></span>
          </div>
          <div class="image" data-name="pixel">
            <span><img src="../assets/artwork/a10.jpg" alt="" /></span>
            <span><a href="#" class="caption py-1">Artwork 10</a></span>
          </div>
          <div class="image" data-name="miniature">
            <span><img src="../assets/artwork/a11.jpg" alt="" /></span>
            <span><a href="#" class="caption py-1">Artwork 11</a></span>
          </div>
          <div class="image" data-name="miniature">
            <span><img src="../assets/artwork/a12.jpg" alt="" /></span>
            <span><a href="#" class="caption py-1">Artwork 12</a></span>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Content -->
    @endsection
