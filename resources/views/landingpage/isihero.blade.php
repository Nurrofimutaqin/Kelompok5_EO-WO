@if (Request::is('home'))
    <div class="col-lg-8">
        <h1>Welcome to <span>Blacksweet</span></h1>
        <h2>Event & Wedding Organizer No.1 In The World!</h2>

        <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">Our Paket</a>
            <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Booking</a>
        </div>
    </div>
@elseif (Request::is('about'))
    <div class="col-lg-8">
        <h1>About<span>----</span></h1>

        <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">Our Paket</a>
            <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Booking</a>
        </div>
    </div>
@endif

{{-- @if (Request::is('about'))
    About
@else
    Home
@endif --}}
