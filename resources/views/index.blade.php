@extends('layouts/main')
@section('css')
    <link rel="stylesheet" href="../css/style.css" />
@endsection
    
@section('container')
    <!-- Awal Carousel -->
    <div class="container mb-3">
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          
          <div class="carousel-item active">
            @if ($posts[0]->image)
                <div style="max-height: 600px; overflow:hidden">
                    <img src="{{ asset('storage/' . $posts[0]->image) }}" class="img-fluid" alt="a"  />    
                </div>
            @else
              <div style="max-height: 500px; overflow:hidden">
                <img src="https://source.unsplash.com/1280x720/?{{ $posts[0]->category->name }}" class="card-img-top" alt="..." />    
              </div>
            @endif
          </div>
          <div class="carousel-item">
            @if ($posts[0]->image)
                <div style="max-height: 600px; overflow:hidden">
                    <img src="{{ asset('storage/' . $posts[1]->image) }}" class="img-fluid" alt="b" />    
                </div>
            @else
              <div style="max-height: 500px; overflow:hidden">
                <img src="https://source.unsplash.com/1280x720/?{{ $posts[1]->category->name }}" class="card-img-top" alt="..." />    
              </div>
            @endif
          </div>
          <div class="carousel-item">
            @if ($posts[0]->image)
                <div style="max-height: 600px; overflow:hidden">
                    <img src="{{ asset('storage/' . $posts[2]->image) }}" class="img-fluid" alt="b" />    
                </div>
            @else
              <div style="max-height: 500px; overflow:hidden">
                <img src="https://source.unsplash.com/1280x720/?{{ $posts[2]->category->name }}" class="card-img-top" alt="..." />    
              </div>
            @endif
          </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <!-- Akhir Carousel -->
    <!-- Content -->
    <section id="content">
      <div class="container">
        <!-- Popart -->
        <div class="popart mb-3 p-3 border border-3 border-success rounded-3">
          <div class="row">
            <div class="col">
              <h2>Artwork Terbaru</h2>
            </div>
            <div class="row mt-2">
              
              @for ($i = 0; $i < 8; $i++)
                <div class="col">
                  <div class="card my-lg-2" style="width: 18rem">
                    @if ($posts[$i]->image)
                        <img src="{{ asset('storage/' . $posts[$i]->image) }}" class="card-img-top" alt="..." />
                    @else
                        <img src="https://source.unsplash.com/1280x720/?{{ $posts[$i]->category->name }}" class="card-img-top" alt="..." />    
                    @endif
                    <div class="card-body">
                      <p class="card-text"><a href="/artwork/{{ $posts[$i]->slug }}" class="text-decoration-none text-dark">{{ $posts[$i]->title }}</a></p>
                    </div>
                  </div>
                </div>
              @endfor
          </div>
        </div>
      </div>
      <!-- Poplit -->
      <div class="popart mb-5 p-3 border border-3 border-success rounded-3">
        <div class="row">
          <div class="col">
            <h2>Literatur Terbaru</h2>
          </div>
          <div class="row mt-2">
            
            @for ($i = 0; $i < 8; $i++)
              <div class="col">
                <div class="card my-lg-2" style="width: 18rem">
                  @if ($literaturs[$i]->image)
                      <img src="{{ asset('storage/' . $literaturs[$i]->image) }}" class="card-img-top" alt="..." />
                  @else
                      <img src="https://source.unsplash.com/1280x720/?{{ $literaturs[$i]->category->name }}" class="card-img-top" alt="..." />    
                  @endif
                  <div class="card-body">
                    <p class="card-text"><a href="/literatur/{{ $literaturs[$i]->slug }}" class="text-decoration-none text-dark">{{ $literaturs[$i]->title }}</a></p>
                  </div>
                </div>
              </div>
            @endfor
        </div>
      </div>

    </section>
    <!-- Akhir Content -->

@endsection
