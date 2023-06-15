<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html">FT<span> Pinjam</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fa fa-bars"></span> Menu
      </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item @if(\Request::is('/')) active @endif"><a href="/" class="nav-link">Beranda</a></li>
            <li class="nav-item @if(\Request::is('rooms')) active @endif"><a href="{{ route('rooms') }}" class="nav-link">Daftar Ruangan</a></li>
            <li class="nav-item"><a href="{{ route('admin.login') }}" class="nav-link">Login</a></li>
        </ul>
      </div>
    </div>
    </nav>
    <!-- END nav -->
    