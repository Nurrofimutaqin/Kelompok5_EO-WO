
@extends('landingpage.index')
@section('content')
<section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          
            <div class="col-lg-8" data-aos="zoom-in" data-aos-delay="100">
                <div class="about-img">
                <img src="assets/img/login.jpg" width="100%" alt="">
                </div>
            </div>
          <div class="col-lg-4 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form mt-10">
                <center><h1>BlackSweet</h1></center>
                <br>
              
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="name" id="name" placeholder="Your username" required>
              </div>
              <div class="form-group mt-3">
                <input type="password" class="form-control" name="Password" id="Password" placeholder="Password" required>
              </div>
              <div class="text-center mt-3"><button type="submit">LOGIN</button></div><br>
              <div class="text-center">Not Registered? <a href="/regis">Create Your Account?</a></div>
            </form>

          </div>
        </div>

      </div>
</section>
@endsection