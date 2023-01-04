<?php
use App\Models\Service_description;
$service_descriptions = Service_description::all();
?>
@extends('website.parent')

@section('title','خدماتنا')


@section('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
@endsection

@section('content')


    <div class="hero hero-inner">
      <div class="container">
        <div class="overlay"></div>
        <div class="row align-items-center">
          <div class="col-lg-6 mx-auto text-center">
            <div class="intro-wrap mx-auto">
              <h1 class="mb-0 animate__animated animate__fadeInUp">خدماتنا</h1>
              @foreach ($services as $service)
              <p class="text-white">{{ $service->title}}</p>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>

  @foreach ( $service_descriptions as $service_description )
  <section class="collection2 mb-5 S">
      <div class="container">
          <div class="text">
              <h5>{{ $service_description->name }}</h5>
              <p>
                {{ $service_description->description }}
              </p>

          </div>
        <!-- carousel -->
        <div class="main-carousel">
          <div class="cell"><img src="assets/images/sections_img/section 1.png" alt=""></div>
          <div class="cell"><img src="assets/images/sections_img/section.png" alt=""></div>
          <div class="cell"><img src="assets/images/backgrounds/2.jpg" alt=""></div>
          <div class="cell"><img src="assets/images/backgrounds/1.jpg" alt=""></div>
          <div class="cell"><img src="assets/images/sections_img/Conference-organizing-companies-in-Abu-Dhabi-Body-01-20220621-ar-1024x640.jpg" alt=""></div>
          <div class="cell"><img src="assets/images/sections_img/95046-1937118527.jpg" alt=""></div>
          <div class="cell"><img src="assets/images/sections_img/FFXTB0OWUAQl-tr.jpeg" alt=""></div>
          <div class="cell"><img src="assets/images/sections_img/WhatsApp Image 2022-12-21 at 9.11.24 PM.jpeg" alt=""></div>
          <div class="cell"><img src="assets/images/sections_img/fndqlfyslyqlmyrsltnlkbr.jpg" alt=""></div>
          <div class="cell"><img src="assets/images/sections_img/3439094912842421034.jpg" alt=""></div>
        </div>


          <div class="foot">
              <button class="btn btn-outline-white rounded-0" type="button">عرض المزيد </button>
          </div>


      </div>
  </section>
  @endforeach








  @endsection

  @section('scripts')
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
  <script type="text/javascript">
    $('.main-carousel').flickity({
      // options
      cellAlign: 'left',
      wrapAround: true ,
      freeScroll: true ,
      autoPlay: true ,
    });
  </script>
  @endsection
