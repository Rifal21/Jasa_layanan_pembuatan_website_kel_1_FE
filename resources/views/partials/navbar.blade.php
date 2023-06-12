
      <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #3EB772">
        <div class="container">
          <a class="navbar-brand" href="/">IMR</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto px-4">
              <a class="nav-link " aria-current="page" href="/">Home</a>
              <a class="nav-link" href="/layanan">Layanan</a>
              <a class="nav-link" href="/tentang">Tentang</a>
              <a class="nav-link" href="/portofolio">Portofolio</a>
            </div>
            <ul class="navbar-nav">
              @auth
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Welcome back, {{ auth()->user()->name }}
                </a>
                <ul class="dropdown-menu">
                  {{-- <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-window-reverse"></i> My Dashboard</a></li> --}}
                  <li>
                    <form action="/logout" method="POST">
                      @csrf
                      <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                    </form>
                  </li>
                </ul>
              </li>
              @else
              <li class="nav-item">
                <a href="/login" class="nav-link btn btn-warning text-light">Masuk</a>
              </li>
            </ul>
            @endauth
          </div>
        </div>
      </nav>
