<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/artwork') ? 'active' : '' }}" href="/dashboard/artwork">
            <span data-feather="image"></span>
            Artwork
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/literatur') ? 'active' : '' }}" href="/dashboard/literatur">
            <span data-feather="book-open"></span>
            Literatur
          </a>
        </li>
      </ul>

    </div>
  </nav>