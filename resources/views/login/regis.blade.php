@extends('landingpage.index')
@section('content')
    <br>
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="row mt-5">


                <div class="col-lg-8" data-aos="zoom-in" data-aos-delay="100">
                    <div class="about-img">
                        <img src="{{ url('assets_landingpage/img/login.jpg') }}" width="100%" alt="">
                    </div>
                </div>
                <div class="col-lg-4 mt-5 mt-lg-0">

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <center>
                            <h1>BlackSweet</h1>
                        </center>
                        <br>

                        <div class="form-group mt-3">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="nama...">
                        </div>
                        <div class="form-group mt-3">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email"
                                placeholder="example@gmail.com">

                        </div>
                        <div class="form-group mt-3">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password" placeholder="password...">

                        </div>
                        <div class="form-group mt-3">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                required autocomplete="new-password" placeholder="re-password...">

                        </div>
                         <div class="text-center mt-3"><button type="submit" class="btn btn-warning btn-block">Registrasi</button>
                    </form>

                </div>
            </div>

        </div>
    </section>
@endsection
