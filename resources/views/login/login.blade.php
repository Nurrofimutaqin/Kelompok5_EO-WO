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

                    @if (session('error'))
                        <div class="alert alert-danger">
                            <b>Opps!</b> {{ session('error') }}
                        </div>
                    @endif

                    <form action="{{ route('actionlogin') }}" method="post" class="">
                        @csrf
                        <center>
                            <h1>BlackSweet</h1>
                        </center>
                        <br>

                        <div class="form-group mt-3">
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>
                        <div class="form-group mt-3">
                            <input type="password" class="form-control" name="Password" placeholder="Password" required>
                        </div>
                        <div class="text-center mt-3"><button type="submit" class="btn btn-warning btn-block">Login</button>
                        </div><br>
                        <div class="text-center">Not Registered? <a href="{{ url('/regis') }}">Create Your Account?</a>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </section>
@endsection
