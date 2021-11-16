@extends('layouts/main')
@section('css')
    <link rel="stylesheet" href="../css/stylePages.css" />
@endsection
@section('container')
<div class="container bg-light p-2">

  <div class="row justify-content-center">
    <div class="col-2">
      <h1 class="text-center">Literatur</h1>
    </div>
  </div>

@include('partials/search') 
   

  <div class="container">
    {{-- Hero Banner --}}
    @if ($literaturs->count())
    <div class="card mb-3">
      @if ($literaturs[0]->image)
          <div style="max-height: 600px; overflow:hidden">
              <img src="{{ asset('storage/' . $literaturs[0]->image) }}" class="img-fluid" alt="..." />    
          </div>
      @else
        <div style="max-height: 500px; overflow:hidden">
          <img src="https://source.unsplash.com/1280x1080/?{{ $literaturs[0]->category->name }}" class="card-img-top" alt="..." />    
        </div>
      @endif
      <div class="card-body text-center">
        <h5 class="card-title"><a href="/literatur/{{ $literaturs[0]->slug }}" class="text-decoration-none">{{ $literaturs[0]->title }}</a></h5>
        <p><a href="/authors/{{ $literaturs[0]->author->username }}" class="text-decoration-none">by {{ $literaturs[0]->author->name }}</a></p>
        <p class="card-text">{!! $literaturs[0]->caption !!}</p>
        <p class="card-text"><small class="text-muted">Last updated {{ $literaturs[0]->created_at->diffForHumans() }}</small></p>
      </div>
    </div>
    

    <!-- Content -->
    <section id="content">
      <div class="container my-3">
        <!-- Popart -->
        <div class="popart p-2 border border-3 border-success rounded-3">
          @foreach ($literaturs as $post)
          <div class="image">
            <span>
              @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" alt="..." />    
              @else
                <img src="https://source.unsplash.com/1280x1080/?{{ $post->category->name }}" class="card-img-top" alt="..." />    
              @endif
              <img src="/assets/index/{{ $post->image }}" alt="" />
            </span>
            <span><a href="/literatur/{{ $post->slug }}" class="caption py-1">{{ $post->title }}</a></span>
          </div>
          @endforeach
        </div>
        <div class="d-flex justify-content-center mt-4">
          {{ $literaturs->links() }}
        </div>
      </div>
    </section>
    <!-- Akhir Content -->
  </div> 

  @else
  <p class="fs-4 text-center">No literatur found.</p>
  <div class="row justify-content-center">
    <div class="col-5">
      <img src="../assets/index/1.png" alt="">
    </div>
  </div>
  @endif

</div>
@endsection
