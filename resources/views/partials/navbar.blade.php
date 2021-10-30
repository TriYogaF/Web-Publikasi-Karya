<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">
      <a class="navbar-brand judul fs-4" href="/">Web Publikasi Karya</a>
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
            <a class="nav-link {{ $title === "Home" ? 'active' : '' }}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $title === "Artwork" ? 'active' : '' }}" href="/artwork">Artwork</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $title === "Literatur" ? 'active' : '' }}" href="/literatur">Literatur</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-success" href="/login" role="button"><i class="bi bi-person-square"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Akhir Navbar -->