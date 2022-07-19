@extends('landingpage.index')
@section('content')
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Detail Paket</h2>
            <p>Detail Paket</p>
        </div>

        <div class="row">
            <section id="why-us" class="why-us">
                <div class="col-lg-12 mt-4 mt-lg-0">

                    <div class="box" data-aos="zoom-in" data-aos-delay="100">
                        <span>Deskripsi</span>
                        <h4>{{ $desk->nama_paketDetail }}</h4>
                        <h4>Rp. &nbsp; {{ number_format($desk->harga, 0, ',', '.') }}</h4>
                        <p>{{ $desk->deskripsi }}</p> <br>
                        <img src="{{ asset('image/' . $desk->foto) }}" alt="" height="400px"> <br> <br>
                        <a href="{{ route('paketDetail', $desk->id_paket) }}" class="btn btn-danger">Back</a>

                    </div>
                </div>
            </section>

        </div>
    </div>
@endsection
