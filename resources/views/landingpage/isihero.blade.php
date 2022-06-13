@if (Request::is('catalog-paket'))
    <div class="col-lg-8">
        <h1>-----<span>Catalog</span>-----</h1>
        <h2>Event & Wedding Organizer No.1 In The World!</h2>

        <div class="btns">
<<<<<<< HEAD
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">Our Catalog</a>
            <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Booking</a>
=======
            <a href="#goto" class="btn-menu animated fadeInUp scrollto">Our Paket</a>
            {{-- <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Booking</a> --}}
>>>>>>> 8750c442fa09e3f69684c3f4469fb55340215a76
        </div>
    </div>
@elseif (Request::is('about'))
    <div class="col-lg-8">
        <h1>-----<span>About</span>-----</h1>

<<<<<<< HEAD
            <div class="btns">
                <a href="#menu" class="btn-menu animated fadeInUp scrollto">Our Catalog</a>
                <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Booking</a>
            </div>
=======
        <div class="btns">
            <a href="#about" class="btn-menu animated fadeInUp scrollto">Profil Kami</a>
            {{-- <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Booking</a> --}}
>>>>>>> 8750c442fa09e3f69684c3f4469fb55340215a76
        </div>
    </div>
@elseif (Request::is('contact'))
    <div class="col-lg-8">
        <h1>-----<span>Contact</span>-----</h1>

<<<<<<< HEAD
            <div class="btns">
                <a href="#menu" class="btn-menu animated fadeInUp scrollto">Our Catalog</a>
                <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Booking</a>
            </div>
=======
        <div class="btns">
            <a href="#contact" class="btn-menu animated fadeInUp scrollto">Contact kami</a>
            {{-- <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Booking</a> --}}
>>>>>>> 8750c442fa09e3f69684c3f4469fb55340215a76
        </div>
    </div>
@elseif (Request::is('detail-paket'))
    <div class="col-lg-8">
        <h1>-----<span>Detail</span>------</h1>

<<<<<<< HEAD
            <div class="btns">
                <a href="#menu" class="btn-menu animated fadeInUp scrollto">Our Catalog</a>
                <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Booking</a>
            </div>
=======
        <div class="btns">
            <a href="#events" class="btn-menu animated fadeInUp scrollto">Detail Paket</a>
            {{-- <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Booking</a> --}}
>>>>>>> 8750c442fa09e3f69684c3f4469fb55340215a76
        </div>
    </div>
@else
    <div class="col-lg-8">
        <h1>Welcome to <span>Blacksweet</span></h1>
        <h2>Event & Wedding Organizer No.1 In The World!</h2>

        <div class="btns">
<<<<<<< HEAD
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">Our Catalog</a>
=======
            <a href="/catalog-paket" class="btn-menu animated fadeInUp scrollto">Catalog</a>
>>>>>>> 8750c442fa09e3f69684c3f4469fb55340215a76
            <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Booking</a>
        </div>
    </div>
@endif

{{-- @if (Request::is('about'))
    About
@else
    Home
@endif --}}
