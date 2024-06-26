<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #273044;">
  <div class="container">
    <a class="navbar-brand" href="{{ route('home') }}">Desa Wisata Tingkir Lor</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('home') }}">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('wisata') }}">Wisata</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('forum.index') }}">Forum</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('dokumentasi') }}">Bantuan</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Akun
          </a>
          <ul class="dropdown-menu">
            @guest
        <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
        <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
      @else

    <li>
      <a class="dropdown-item" href="{{ route('logout') }}"
      onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
      Keluar
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
      @csrf
      </form>
    </li>
  @endguest
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>