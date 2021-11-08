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
            <a class="nav-link {{ $active === "artwork" ? 'active' : '' }}" href="/artwork">Artwork</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $active === "literatur" ? 'active' : '' }}" href="/literatur">Literatur</a>
          </li>
          <ul class="navbar-nav ms-auto">
            @auth
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle {{ $active === "dashboard" ? 'active' : '' }}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person-square"></i>
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item " href="/dashboard">Dashboard</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item"> Logout</button>  
                  </form>
                </li>
              </ul>
            </li>
            @else
            <li class="nav-item">
              <a class="btn btn-success {{ $active === "dashboard" ? 'login' : '' }}" href="/login" role="button"><i class="bi bi-person-square"></i></a>
            </li>
            @endauth
          </ul>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Akhir Navbar -->