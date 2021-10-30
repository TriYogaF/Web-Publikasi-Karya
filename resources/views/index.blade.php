<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- Style CSS -->
    <link rel="stylesheet" href="../css/style.css" />

    <!-- Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

    <title>Web Publikasi Karya</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
      <div class="container">
        <a class="navbar-brand judul fs-4" href="index.html">Web Publikasi Karya</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="search_bar">
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
            <button class="btn btn-success" type="submit"><i class="bi bi-search"></i></button>
          </form>
        </div>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="artwork">Artwork</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="literatur">Literatur</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-success" href="login.html" role="button"><i class="bi bi-person-square"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

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

    <!-- About -->
    <section id="about text-center">
      <div class="container">
        <div class="about bg-light border border-3 border-success mb-3 p-3 rounded-3">
          <h2 class="fs-4 text-center">About Website</h2>
          <p class="lead">Merupakan sebuah website yang berisi kumpulan karya dari orang-orang yang kesulitan mempublikasikan karyanya secara mandiri.</p>
        </div>
      </div>
    </section>
    <!-- Akhir About -->

    <!-- Footer -->
    <footer class="footer text-white text-center p-3 bg-success">
      <p>© by Web Publikasi Karya 2021</p>
    </footer>
    <!-- Akhir Footer -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>