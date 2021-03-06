  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
      <div class="container d-flex justify-content-center justify-content-md-between">

          <div class="contact-info d-flex align-items-center">
              <i class="bi bi-phone d-flex align-items-center"><span>0856 9711 3324</span></i>
              <i class="bi bi-clock d-flex align-items-center ms-4"><span> Senin-Sabtu: 08AM - 06PM</span></i>
          </div>
      </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
      <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

          <h1 class="logo me-auto me-lg-0"><a href="/">Blacksweet EO&WO</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

          <nav id="navbar" class="navbar order-last order-lg-0">
              <ul>
                  <li><a class="nav-link scrollto" href="{{ url('/home') }}">Home</a></li>
                  <li><a class="nav-link scrollto" href="{{ url('/about') }}">About</a></li>
                  <li><a class="nav-link scrollto" href="{{ url('/catalog-paket') }}">Catalog</a></li>
                  <li><a class="nav-link scrollto" href="{{ url('/gallery') }}">Gallery Testimoni</a></li>
                  <li><a class="nav-link scrollto" href="/contact">Contact</a></li>

                  @if (empty(Auth::user()))
                      <li><a class="nav-link scrollto" href="{{ route('landing-login') }}">Login</a></li>
                      <li><a class="nav-link scrollto" href="{{ route('landing-register') }}">Register</a></li>
                  @elseif (!empty(Auth::user()))
                      <li><a class="nav-link scrollto" href="{{ route('booking') }}">Booking</a></li>
                  @endif
              </ul>
              <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
          @if (!empty(Auth::user()))
              <a href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                  class="book-a-table-btn scrollto d-none d-lg-flex">Logout</a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
          @endif
      </div>
  </header><!-- End Header -->
