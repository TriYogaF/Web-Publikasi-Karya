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
            <img src="../assets/index/a.jpg" class="d-block img-fluid" alt="a" />
          </div>
          <div class="carousel-item">
            <img src="../assets/index/b.jpg" class="d-block img-fluid" alt="b" />
          </div>
          <div class="carousel-item">
            <img src="../assets/index/c.jpg" class="d-block img-fluid" alt="c" />
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
              <h2>Artwork Populer</h2>
            </div>
            <div class="row mt-2">
              <div class="col">
                <div class="card" style="width: 18rem">
                  <img src="../assets/artwork/a1.jpg" class="card-img-top" alt="1" />
                  <div class="card-body">
                    <p class="card-text">Artwork pertama</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card" style="width: 18rem">
                  <img src="../assets/artwork/a2.jpg" class="card-img-top" alt="1" />
                  <div class="card-body">
                    <p class="card-text">Artwork kedua</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card" style="width: 18rem">
                  <img src="../assets/artwork/a3.jpg" class="card-img-top" alt="1" />
                  <div class="card-body">
                    <p class="card-text">Artwork ketiga</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card" style="width: 18rem">
                  <img src="../assets/artwork/a4.jpg" class="card-img-top" alt="1" />
                  <div class="card-body">
                    <p class="card-text">Artwork keempat</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mt-2">
              <div class="col">
                <div class="card" style="width: 18rem">
                  <img src="../assets/artwork/a5.jpg" class="card-img-top" alt="1" />
                  <div class="card-body">
                    <p class="card-text">Artwork kelima</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card" style="width: 18rem">
                  <img src="../assets/artwork/a6.jpg" class="card-img-top" alt="1" />
                  <div class="card-body">
                    <p class="card-text">Artwork keenam</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card" style="width: 18rem">
                  <img src="../assets/artwork/a7.jpg" class="card-img-top" alt="1" />
                  <div class="card-body">
                    <p class="card-text">Artwork ketujuh</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card" style="width: 18rem">
                  <img src="../assets/artwork/a8.jpg" class="card-img-top" alt="1" />
                  <div class="card-body">
                    <p class="card-text">Artwork kedelapan</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Poplit -->
        <div class="poplit mb-3 p-3 border border-3 border-success rounded-3">
          <div class="row">
            <div class="col">
              <h2>Literatur Populer</h2>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col">
              <div class="card" style="width: 18rem">
                <img src="../assets/literatur/l1.jpg" class="card-img-top" alt="1" />
                <div class="card-body">
                  <p class="card-text">Literatur pertama</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card" style="width: 18rem">
                <img src="../assets/literatur/l2.jpg" class="card-img-top" alt="1" />
                <div class="card-body">
                  <p class="card-text">Literatur kedua</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card" style="width: 18rem">
                <img src="../assets/literatur/l3.jpg" class="card-img-top" alt="1" />
                <div class="card-body">
                  <p class="card-text">Literatur ketiga</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card" style="width: 18rem">
                <img src="../assets/literatur/l4.jpg" class="card-img-top" alt="1" />
                <div class="card-body">
                  <p class="card-text">Literatur keempat</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col">
              <div class="card" style="width: 18rem">
                <img src="../assets/literatur/l5.jpg" class="card-img-top" alt="1" />
                <div class="card-body">
                  <p class="card-text">Literatur kelima</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card" style="width: 18rem">
                <img src="../assets/literatur/l6.jpg" class="card-img-top" alt="1" />
                <div class="card-body">
                  <p class="card-text">Literatur keenam</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card" style="width: 18rem">
                <img src="../assets/literatur/l7.jpg" class="card-img-top" alt="1" />
                <div class="card-body">
                  <p class="card-text">Literatur ketujuh</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card" style="width: 18rem">
                <img src="../assets/literatur/l8.jpg" class="card-img-top" alt="1" />
                <div class="card-body">
                  <p class="card-text">Literatur kedelapan</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Popcreator -->
        <div class="popcreator mb-3 p-3 border border-3 border-success rounded-3">
          <div class="row">
            <div class="col">
              <h2>Kreator Populer</h2>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col">
              <div class="card rounded-circle overflow-hidden" style="height: 18rem">
                <img src="../assets/index/k1.jpg" class="card-img-top" alt="1" />
              </div>
              <div class="card-body">
                <p class="card-text text-center">Kreator pertama</p>
              </div>
            </div>
            <div class="col">
              <div class="card rounded-circle overflow-hidden" style="height: 18rem">
                <img src="../assets/index/k2.jpg" class="card-img-top" alt="1" />
              </div>
              <div class="card-body">
                <p class="card-text text-center">Kreator kedua</p>
              </div>
            </div>
            <div class="col">
              <div class="card rounded-circle overflow-hidden" style="height: 18rem">
                <img src="../assets/index/k3.jpg" class="card-img-top" alt="1" />
              </div>
              <div class="card-body">
                <p class="card-text text-center">Kreator ketiga</p>
              </div>
            </div>
            <div class="col">
              <div class="card rounded-circle overflow-hidden" style="height: 18rem">
                <img src="../assets/index/k4.jpg" class="card-img-top" alt="1" />
              </div>
              <div class="card-body">
                <p class="card-text text-center">Kreator keempat</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Content -->

@endsection
