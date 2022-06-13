@extends('landingpage.index')
@section('content')
    <br>
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="row mt-5">


                <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="about-img">
                        <img src="{{ url('assets_landingpage/img/login.jpg') }}" width="100%" alt="">
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0">

                    <form action="" method="post" role="form" class="php-email-form mt-10">
                        <center>
                            <h1>BlackSweet</h1>
                            <p>-----<span>Booking Now</span>-----</p>
                        </center>

                        <div class="form-group mt-5">
                            <input type="text" class="form-control" name="name" id="Name" placeholder="Your username"
                                required>
                        </div>
                        <div class="form-group mt-3">
                            <input type="password" class="form-control" name="Password" id="Password"
                                placeholder="Password" required>
                        </div>
                        <div class="text-center mt-3"><button type="submit"><a href="{{ url('/admin') }}">LOGIN
                                </a></button></div><br>
                    </form>

                </div>
            </div>

        </div>
    </section>
@endsection
