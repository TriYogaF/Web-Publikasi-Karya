
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
          @foreach ($posts as $post)
          <div class="image" data-name="{{ $post["data-name"] }}">
            <span><img src="../assets/artwork/{{ $post["img"] }}" alt="" /></span>
            <span><a href="/artwork/{{ $post["slug"] }}" class="caption py-1">{{ $post["caption"] }}</a></span>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    <!-- Akhir Content -->
    @endsection
