
@extends('layouts/main')
@section('css')
    <link rel="stylesheet" href="../css/stylePages.css" />
@endsection
@section('container')
<div class="container bg-light p-2">

  <div class="row justify-content-center">
    <div class="col-2">
      <h1 class="text-center">Artwork</h1>
    </div>
  </div>

@include('partials/search') 
   

  <div class="container">
    {{-- Hero Banner --}}
    @if ($posts->count())
    <div class="card mb-3">
      @if ($posts[0]->image)
          <div style="max-height: 500px; overflow:hidden">
              <img src="{{ asset('storage/' . $posts[0]->image) }}" class="img-fluid" alt="..." />    
          </div>
      @else
        <div style="max-height: 500px; overflow:hidden">
          <img src="https://source.unsplash.com/1280x1080/?{{ $posts[0]->category->name }}" class="card-img-top" alt="..." />    
        </div>
      @endif
      <div class="card-body text-center">
        <h5 class="card-title"><a href="/artwork/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></h5>
        <p><a href="/authors/{{ $posts[0]->author->username }}" class="text-decoration-none">by {{ $posts[0]->author->name }}</a></p>
        <p class="card-text">{!! $posts[0]->caption !!}</p>
        <p class="card-text"><small class="text-muted">Last updated {{ $posts[0]->created_at->diffForHumans() }}</small></p>
      </div>
    </div>
    

    <!-- Content -->
    <section id="content">
      <div class="container my-3">
        <!-- Popart -->
        <div class="popart p-2 border border-3 border-success rounded-3">
          @foreach ($posts as $post)
          <div class="image">
            <span>
              @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" alt="..." />    
              @else
                <img src="https://source.unsplash.com/1280x1080/?{{ $post->category->name }}" class="card-img-top" alt="..." />    
              @endif
              <img src="/assets/index/{{ $post->image }}" alt="" />

            <span><a href="/artwork/{{ $post->slug }}" class="caption py-1">{{ $post->title }}</a></span>
          </div>
          @endforeach
        </div>
        <div class="d-flex justify-content-center mt-4">
          {{ $posts->links() }}
        </div>
      </div>
    </section>
    <!-- Akhir Content -->
  </div> 

  @else
  <p class="fs-4 text-center">No artwork found.</p>
  <div class="row justify-content-center">
    <div class="col-5">
      <img src="../assets/index/1.png" alt="">
    </div>
  </div>
  @endif

</div>
  
    
@endsection
