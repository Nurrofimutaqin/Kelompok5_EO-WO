@extends('landingpage.index')
@section('content')
    <br>
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="row mt-5">


                <div class="col-lg-8" data-aos="zoom-in" data-aos-delay="100">
                    <div class="about-img">
                        <img src="{{ asset('assets_landingpage/img/login.jpg') }}" width="100%" alt="">
                    </div>
                </div>
                <div class="col-lg-4 mt-5 mt-lg-0">

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <center>
                            <h1>BlackSweet</h1>
                        </center>
                        <br>

                        <div class="form-group mt-3">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                placeholder="example@email.com...">
                        </div>
                        <div class="form-group mt-3">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                name="password" required autocomplete="current-password" placeholder="password...">
                        </div>
                        <div class="text-center mt-3"><button type="submit" class="btn btn-warning btn-block">Login</button>
                        </div><br>
                        <div class="text-center">Not Registered? <a href="{{ url('/regis') }}">Create Your
                                Account?</a>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </section>
@endsection
