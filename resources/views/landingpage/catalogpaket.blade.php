@extends('landingpage.index')
@section('content')
    @include('landingpage.hero')
    <!-- ======= Menu Section ======= -->
    <section id="goto" class="menu bg-section chefs">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Catalog</h2>
                <p>Our Catalog</p>
            </div>

            <div class="row">
                @foreach ($dataPaket as $d)
                    <div class="col-lg-4 col-md-6 mb-5">
                        <div class="member" data-aos="zoom-in" data-aos-delay="100">
                            <img src="{{ asset('storage/' . $d->logo) }}" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>{{ $d->nama_paket }}</h4>
                                    <span>-----------</span>
                                </div>
                            </div>
                        </div>
                        <center><a href="{{ route('paketDetail', $d->id) }}" class="book-a-table-btn scrollto">Booking</a>
                        </center>
                    </div>
                @endforeach
            </div>
        </div>
    </section><!-- End Menu Section -->
@endsection
