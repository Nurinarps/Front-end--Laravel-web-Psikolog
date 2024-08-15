<nav class="navbar navbar-expand-lg bg-body-white">
  <div class="container">
  <a class="navbar-brand" href="#">
      <img src="/img/logo1.png" alt="Logo Tes Psikotes" style="width: 200px; height: auto;">
  </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Layanan Kami
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ url('/layanankami/coaching') }}">Coaching</a></li>
                <li><a class="dropdown-item" href="{{ url('/layanankami/counseling') }}">Counseling</a></li>
                <li><a class="dropdown-item" href="{{ url('/layanankami/mentoring') }}">Mentoring</a></li>
                <li><a class="dropdown-item" href="{{ url('/layanankami/analisisDataStatistik') }}">Analisis Data Statistik</a></li>
            </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/TesPsikolog">Tes Psikolog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/Blog">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/About">About</a>
        </li>
      </ul>
    </div>
  </div>
</nav>