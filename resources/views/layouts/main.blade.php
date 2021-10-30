<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- Style CSS -->
    @yield('css')

    <!-- Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

    <title>Web Publikasi Karya</title>
  </head>
  <body>
    
    @include('partials/navbar')

    @yield('container')

    <!-- Footer -->
    {{-- <footer class="text-white bg-success text-center p-3">
      <p>© by Web Publikasi Karya 2021</p>
    </footer> --}}
    <footer
          class="text-center text-lg-start text-white"
          style="background-color: #929fba"
          >
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Links -->
      <section class="">
        <!--Grid row-->
        <div class="row">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Web Publikasi Karya</h6>
            <p>Merupakan sebuah website yang berisi kumpulan karya dari orang-orang yang kesulitan mempublikasikan karyanya secara mandiri.</p>
          </div>
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
            <p>
              <a href="#" class="text-white text-decoration-none">Artwork</a>
            </p>
            <p>
              <a href="#" class="text-white text-decoration-none">Literatur</a>
            </p>
          </div>
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
            <p><i class="fas fa-home mr-3"></i> Mondstadt, Teyvat</p>
            <p><i class="fas fa-envelope mr-3"></i> webpublikasikarya@gmail.com</p>
            <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Follow us</h6>

            <!-- Facebook -->
            <a
               class="btn btn-primary btn-floating m-1"
               style="background-color: #3b5998"
               href="#!"
               role="button"
               ><i class="bi bi-facebook"></i>
            </a>

            <!-- Twitter -->
            <a
               class="btn btn-primary btn-floating m-1"
               style="background-color: #55acee"
               href="#!"
               role="button"
               ><i class="bi bi-twitter"></i>
            </a>

            <!-- Google -->
            <a
               class="btn btn-primary btn-floating m-1"
               style="background-color: #dd4b39"
               href="#!"
               role="button"
               ><i class="bi bi-google"></i>
            </a>

            <!-- Instagram -->
            <a
               class="btn btn-primary btn-floating m-1"
               style="background-color: #ac2bac"
               href="#!"
               role="button"
               ><i class="bi bi-instagram"></i>
            </a>

            <!-- Linkedin -->
            <a
               class="btn btn-primary btn-floating m-1"
               style="background-color: #0082ca"
               href="#!"
               role="button"
               ><i class="bi bi-linkedin"></i>
            </a>
            <!-- Github -->
            <a
               class="btn btn-primary btn-floating m-1"
               style="background-color: #333333"
               href="#!"
               role="button"
               ><i class="bi bi-github"></i>
            </a>
          </div>
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div
         class="text-center p-3"
         style="background-color: rgba(0, 0, 0, 0.2)">
      © 2021 Copyright:
      <a class="text-white text-decoration-none" href="http://web-publikasi-karya.test/"
         >web-publikasi-karya.com</a>
    </div>
    <!-- Copyright -->
</footer>
      <!-- End of .container -->
    <!-- Akhir Footer -->

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="../js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
