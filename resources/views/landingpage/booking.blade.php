@extends('landingpage.index')
@section('content')
    <section id="menu" class="menu section-bg">
        <div class="container" data-aos="fade-up">
            <br>
            <div class="section-title mt-5">
                <h2>Booking</h2>
                <p>Check Our Booking </p>
            </div>

            @foreach ($Booking as $d)
                <div class="row" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-6 menu-item filter-starters">
                        <div class="menu-content">
                            <a href="#">{{ $d->DetailPaket->nama_paketDetail }} &nbsp;
                                {{ $d->DetailPaket->Paket->nama_paket }}</a><span>
                                Rp.{{ number_format($d->DetailPaket->harga, 0, ',', '.') }}</span>

                        </div>
                        <div class="menu-ingredients">
                            Tanggal Booking: {{ $d->tgl_booking }}<br>
                            Status: {{ $d->status }}
                        </div>
                    </div>

                    @if ($d->bukti_bayar == null)
                        <div class="col-lg-6">
                            <form action="{{ route('booking-update', $d->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                {{-- @method('PUT') --}}

                                <div class="row">
                                    <div class="col-xs col-sm col-md">
                                        <input type="hidden" name="id">
                                        <div class="form-group">
                                            <label for="bukti_bayar" class="form-label"><strong>Post
                                                    bukti_bayar:</strong></label>
                                            <input class="form-control @error('bukti_bayar') is-invalid @enderror "
                                                type="file" id="bukti_bayar" name="bukti_bayar">
                                            @error('bukti_bayar')
                                                <div class="alert alert-danger">
                                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="col-xs col-sm col-md">
                                        <br>
                                        <button class="btn1 scrollto" type="submit">Save</button>
                                    </div>
                                </div>

                            </form>
                            <p> Tranfer BRI. Rek. 1234567891011 a/n EOWO </p>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </section><!-- End Menu Section -->
@endsection
