@extends('landingpage.index')
@push('style-custom')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endpush
@section('content')
    @include('landingpage.hero')
    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Events</h2>
                <p>Organize Your Events in Blacksweet</p>
            </div>

            <input type="date" id="tgl_booking" name="tgl_booking" class="form-control" placeholder="TTTT-BB-HH">
            <input type="hidden" id="id_paket" name="id_paket" value="{{ $idPaket }}">
            <button class="btn btn-primary" id="btn_cek">Cek Data</button>
            <div class="events-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper" id="isi_swiper">

                    @foreach ($allData as $d)
                        <div class="swiper-slide">
                            <div class="row event-item">
                                <div class="col-lg-6">
                                    <img src="{{ url('assets_landingpage/img/event-birthday.jpg') }}"
                                        class="img-fluid" alt="">
                                </div>
                                <div class="col-lg-6 pt-4 pt-lg-0 content">
                                    <h3>{{ $d->nama_paketDetail }}</h3>
                                    <div class="price">
                                        <p><span>Rp. {{ $d->harga }}</span></p>
                                    </div>
                                    <p class="fst-italic">
                                        {{ $d->deskripsi }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Events Section -->
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
                    // dataType: 'json',
                    success: function(data) {
                        // console.log(data)

                        let data_swiper = "";
                        for (let x in data) {
                            data_swiper += ` <div class="swiper-slide">
                                                        <div class="row event-item">
                                                            <div class="col-lg-6">
                                                                <img src="{{ url('assets_landingpage/img/event-birthday.jpg') }}"
                                                                    class="img-fluid" alt="">
                                                            </div>
                                                            <div class="col-lg-6 pt-4 pt-lg-0 content">
                                                                <h3>${data[x]['nama_paketDetail']}</h3>
                                                                <div class="price">
                                                                    <p><span>${data[x]['harga']}</span></p>
                                                                </div>
                                                                <p class="fst-italic">
                                                                   ${data[x]['deskripsi']}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>`;
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
