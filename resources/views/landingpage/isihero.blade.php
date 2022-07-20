@if (Request::is('catalog-paket'))
    <div class="col-lg-8">
        <h1>-----<span>Catalog</span>-----</h1>
        <h2>Pick your Catalog!</h2>

        <div class="btns">
            <a href="#goto" class="btn-menu animated fadeInUp scrollto">Our Paket</a>
            {{-- <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Booking</a> --}}
        </div>
    </div>
@elseif (Request::is('about'))
    <div class="col-lg-8">
        <h1>-----<span>About</span>-----</h1>

        <div class="btns">
            <a href="#about" class="btn-menu animated fadeInUp scrollto">About Us</a>
            {{-- <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Booking</a> --}}
        </div>
    </div>
@elseif (Request::is('contact'))
    <div class="col-lg-8">
        <h1>-----<span>Contact</span>-----</h1>

        <div class="btns">
            <a href="#contact" class="btn-menu animated fadeInUp scrollto">Contact kami</a>
            {{-- <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Booking</a> --}}
        </div>
    </div>
@elseif (Request::is('detail-paket'))
    <div class="col-lg-8">
        <h1>-----<span>Detail</span>------</h1>

        <div class="btns">
            <a href="#events" class="btn-menu animated fadeInUp scrollto">Detail Paket</a>
            {{-- <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Booking</a> --}}
        </div>
    </div>
@else
    <div class="col-lg-8">
        <h1>Welcome to <span>Blacksweet</span></h1>
        <h2>Event & Wedding Organizer No.1 Sepulau Lombok</h2>

        <div class="btns">
            <a href="/catalog-paket" class="btn-menu animated fadeInUp scrollto">Catalog</a>
            @if (!empty(Auth::user()))
                <a href="{{ route('booking') }}" class="btn-book animated fadeInUp scrollto">Booking</a>
            @endif
        </div>
    </div>

    <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in"
        data-aos-delay="200">
        <a href="https://www.youtube.com/watch?v=6vGoiL75K8k" class="glightbox play-btn"></a>
    </div>
@endif

{{-- @if (Request::is('about'))
    About
@else
    Home
@endif --}}
