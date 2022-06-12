@extends('landingpage.index')
@section('content')
@include('landingpage.hero')
    <!-- ======= Menu Section ======= -->
  <section id="menu chefs" class="menu bg-section chefs">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Catalog</h2>
          <p>Our Catalog</p>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-wo">WO</li>
              <li data-filter=".filter-eo">EO</li>
            </ul>
          
          </div>
         
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <img src="{{ url('assets_landingpage/img/1.jpg')}}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Paket Platinum</h4>
                  <span>Wedding Package</span>
                </div>
              
              </div>
            </div>
            <a href="" class="book-a-table-btn scrollto">Book Now</a> 
             <a href="{{ url('/detailpaket') }}" class="book-a-table-btn scrollto"><i class="bi bi-arrow-right"></i></a> 
          
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <img src="{{ url('assets_landingpage/img/2.jpg')}}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Paket Gold</h4>
                  <span>Wedding Package</span>
                </div>
               
              </div>
            </div>
            <a href="" class="book-a-table-btn scrollto">Book Now</a>  
            <a href="{{ url('/detailpaket') }}" class="book-a-table-btn scrollto"><i class="bi bi-arrow-right"></i></a> 
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="300">
              <img src="{{ url('assets_landingpage/img/3.jpg')}}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Paket Silver</h4>
                  <span>Wedding Package</span>
                </div>
              
              </div>
            </div>
            <a href="" class="book-a-table-btn scrollto">Book Now</a> 
            <a href="{{ url('/detailpaket') }}" class="book-a-table-btn scrollto"><i class="bi bi-arrow-right"></i></a> 
          </div>
        
        </div>
        <br/>
        <br/>
        <div class="row">

<div class="col-lg-4 col-md-6">
  <div class="member" data-aos="zoom-in" data-aos-delay="100">
    <img src="{{ url('assets_landingpage/img/gallery/gallery-1.jpg')}}" class="img-fluid" alt="">
    <div class="member-info">
      <div class="member-info-content">
        <h4>Paket Platinum</h4>
        <span>Event Package</span>
      </div>
    
    </div>
  </div>
  <a href="" class="book-a-table-btn scrollto">Book Now</a> 
   <a href="{{ url('/detailpaket') }}" class="book-a-table-btn scrollto"><i class="bi bi-arrow-right"></i></a> 

</div>

<div class="col-lg-4 col-md-6">
  <div class="member" data-aos="zoom-in" data-aos-delay="200">
    <img src="{{ url('assets_landingpage/img/gallery/gallery-2.jpg')}}" class="img-fluid" alt="">
    <div class="member-info">
      <div class="member-info-content">
        <h4>Paket Gold</h4>
        <span>Event Package</span>
      </div>
     
    </div>
  </div>
  <a href="" class="book-a-table-btn scrollto">Book Now</a>  
  <a href="{{ url('/detailpaket') }}" class="book-a-table-btn scrollto"><i class="bi bi-arrow-right"></i></a> 
</div>

<div class="col-lg-4 col-md-6">
  <div class="member" data-aos="zoom-in" data-aos-delay="300">
    <img src="{{ url('assets_landingpage/img/gallery/gallery-3.jpg')}}" class="img-fluid" alt="">
    <div class="member-info">
      <div class="member-info-content">
        <h4>Paket Silver</h4>
        <span>Event Package</span>
      </div>
    
    </div>
  </div>
  <a href="" class="book-a-table-btn scrollto">Book Now</a> 
  <a href="{{ url('/detailpaket') }}" class="book-a-table-btn scrollto"><i class="bi bi-arrow-right"></i></a> 
</div>

</div>
      </div>
    </section><!-- End Menu Section -->
    @endsection