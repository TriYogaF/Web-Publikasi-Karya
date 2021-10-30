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
          <span class="item bg-warning" data-name="adventure">Adventure</span>
          <span class="item bg-warning" data-name="comedy">Comedy</span>
          <span class="item bg-warning" data-name="drama">Drama</span>
          <span class="item bg-warning" data-name="romantic">Romantic</span>
          <span class="item bg-warning" data-name="history">History</span>
          <span class="item bg-warning" data-name="biography">Biography</span>
          <span class="item bg-warning" data-name="fantasy">Fantasy</span>
        </div>
      </nav>
    </div>
    <!-- Akhir Filter -->
    <!-- Content -->
    <section id="content">
      <div class="container">
        <!-- Popart -->
        <div class="popart my-3 p-3 border border-3 border-success rounded-3">
          <div class="image" data-name="history">
            <span><img src="../assets/literatur/l1.jpg" alt="" /></span>
            <span><a href="#" class="caption py-1">Literatur 1</a></span>
          </div>
          <div class="image" data-name="biography">
            <span><img src="../assets/literatur/l2.jpg" alt="" /></span>
            <span><a href="#" class="caption py-1">Literatur 2</a></span>
          </div>
          <div class="image" data-name="drama">
            <span><img src="../assets/literatur/l3.jpg" alt="" /></span>
            <span><a href="#" class="caption py-1">Literatur 3</a></span>
          </div>
          <div class="image" data-name="fantasy">
            <span><img src="../assets/literatur/l4.jpg" alt="" /></span>
            <span><a href="#" class="caption py-1">Literatur 4</a></span>
          </div>
          <div class="image" data-name="drama">
            <span><img src="../assets/literatur/l5.jpg" alt="" /></span>
            <span><a href="#" class="caption py-1">Literatur 5</a></span>
          </div>
          <div class="image" data-name="romantic">
            <span><img src="../assets/literatur/l6.jpg" alt="" /></span>
            <span><a href="#" class="caption py-1">Literatur 6</a></span>
          </div>
          <div class="image" data-name="drama">
            <span><img src="../assets/literatur/l7.jpg" alt="" /></span>
            <span><a href="#" class="caption py-1">Literatur 7</a></span>
          </div>
          <div class="image" data-name="history">
            <span><img src="../assets/literatur/l8.jpg" alt="" /></span>
            <span><a href="#" class="caption py-1">Literatur 8</a></span>
          </div>
          <div class="image" data-name="fantasy">
            <span><img src="../assets/literatur/l9.jpg" alt="" /></span>
            <span><a href="#" class="caption py-1">Literatur 9</a></span>
          </div>
          <div class="image" data-name="comedy">
            <span><img src="../assets/literatur/l10.jpg" alt="" /></span>
            <span><a href="#" class="caption py-1">Literatur 10</a></span
            >>
          </div>
          <div class="image" data-name="adventure">
            <span><img src="../assets/literatur/l11.jpg" alt="" /></span>
            <span><a href="#" class="caption py-1">Literatur 11</a></span
            >>
          </div>
          <div class="image" data-name="biography">
            <span><img src="../assets/literatur/l12.jpg" alt="" /></span>
            <span><a href="#" class="caption py-1">Literatur 12</a></span
            >>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Content -->
    @endsection
