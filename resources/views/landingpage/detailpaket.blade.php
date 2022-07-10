@extends('landingpage.index')
@push('style-custom')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endpush
@section('content')
    @include('landingpage.hero')
    <!-- ======= Menu Section ======= -->
    <section id="goto" class="menu bg-section chefs">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Detail Paket</h2>
                <p>Detail Paket</p>
            </div>
            <div class="row">
                <div class="col-3">
                    @if (!empty(Auth::user()))
                        <input type="date" id="tgl_booking" name="tgl_booking" class="form-control"
                            placeholder="TTTT-BB-HH">
                            <br/>
                        <input type="hidden" id="id_paket" name="id_paket" value="{{ $idPaket }}">
                        <button class="btn btn-primary" id="btn_cek">Cek Data</button>
                        <br/>
                    @endif
                </div>
                <div class="col">
                </div>
            </div>

            <div class="row" id="isi_swiper">
                @if (empty(Auth::user()))
                    <div class="section-title">
                        <h2><a class="nav-link scrollto" href="{{ route('landing-login') }}">Login Dulu!</a></h2>
                    </div>
                @endif
               
                @foreach ($allData as $d)
               
                    <div class="col-lg-4 col-md-6 mb-5">
                    <br/> <br/>
                        <div class="member" data-aos="zoom-in" data-aos-delay="100">
                            <img src="{{ asset('image/' . $d->foto) }}" alt="" height="400px">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h2>{{ $d->nama_paketDetail }}</h2>
                                    <h4>Harga :</h4>
                                    <span>Rp. {{ $d->harga }}
                                        {{-- {{ $d->id }} --}}
                                    </span>
                                    <h4>Fasilitas :</h4>
                                    <p>{{ $d->deskripsi }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section><!-- End Menu Section -->
@endsection


@push('script-custom')
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $("#btn_cek").click(function() {
                var id = $('#id_paket').val()
                var tgl = $('#tgl_booking').val()

                $.ajax({
                    type: "POST",
                    url: "{{ route('getDetail') }}",
                    data: {
                        id: id,
                        tgl: tgl,
                    },
                    success: function(data) {
                        console.log(data)

                        let data_swiper = "";
                        for (let x in data) {
                            data_swiper += `<div class="col-lg-4 col-md-6 mb-5"><br/>
                                                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                                                    <img src="{{ asset('image/background.jpg') }}" alt="" height="400px">
                                                    <div class="member-info">
                                                        <div class="member-info-content">
                                                            <h2>${data[x]['nama_paketDetail']}</h2>
                                                            <h4>Harga :</h4>
                                                            <span> ${data[x]['harga']} </span> <br>
                                                            <h4>Fasilitas :</h4>
                                                           <p> ${data[x]['deskripsi']} </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <center>
                                                     <form action="{{ route('booking-store') }}" method="post" role="form" class="php-email-form">
                                                       @csrf
                                                        <div class="form-group mt-3">
                                                            <input type="date" class="form-control" name="tgl_booking"
                                                                placeholder="Tanggal Booking" required>
                                                            <input type="hidden" class="form-control" name="id" value="${data[x]['id']}">
                                                        </div>
                                                        <br/>
                                                        
                                                        <button class="btn1 scrollto" type="submit">Booking Paket</button>
                                                    </form>
                                                </center>
                                            </div> `;
                        }
                        // console.log(data_swiper)
                        $('#isi_swiper').html('');
                        $('#isi_swiper').html(data_swiper);

                    }
                });
            });
        });
    </script>
@endpush
