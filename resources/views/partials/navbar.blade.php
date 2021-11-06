<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">
      <a class="navbar-brand judul fs-4" href="/">Web Publikasi Karya</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link {{ $active === "home" ? 'active' : '' }}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <div class="dropdown">
              <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Artwork
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="/artwork">Karya</a></li>
                <li><a class="dropdown-item" href="/artwork/tag">Tag</a></li>
              </ul>
            </div>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link {{ $active === "artwork" ? 'active' : '' }}" href="/artwork">Artwork</a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link {{ $active === "literatur" ? 'active' : '' }}" href="/literatur">Literatur</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-success" href="/login" role="button"><i class="bi bi-person-square"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Akhir Navbar -->