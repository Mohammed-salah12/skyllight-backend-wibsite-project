<?php
use App\Models\Principle;
$principles = Principle::all();
?>

@extends('website.parent')

@section('title','الصفحة الرئيسية')


@section('styles')

@endsection

@section('content')


    <!-- Start Header -->
    <header>
      <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
      <div class="overlay"></div>

      <!-- The HTML5 video element that will create the background video on the header -->
      @foreach ($mains as $main)
      <video
      playsinline="playsinline"
      autoplay="autoplay"
      muted="muted"
      loop="loop"
    >
      <source src="{{ asset('storage/images/videos/'.$main->videos) }}" loading="lazy" type="video/mp4" />
    </video>
      @endforeach


      <!-- The header content -->
      <div class="container h-100 header-content ">
        <div class="d-flex h-100 text-center align-items-center">
            @foreach ($mains as $main)

          <div class="w-100 text-white sky">
            <h1 class="display-3 mt-5">{{ $main->main_title }}</h1>
            <p class="lead mb-0 mt-5">
                {{ $main->sub_title }}
            </p>
            </div>
            @endforeach
        </div>
      </div>
    </header>
    <!-- End Header -->

    <!-- Start About -->
    <section class="Brief">
      <div class="container">
        <h3>نبذة</h3>
        @foreach ($principles as $principle)
        <p>
            {{ $principle->brief }}
          </p>
        @endforeach

      </div>
    </section>
    <!-- End About -->

    <!-- Start OurServices -->
    <div class="ServicesTitle">
      <h2>خدماتنا</h2>
    </div>
    <section class="OurServices">
      <div class="container">
        <div
          class="cards d-flex justify-content-center align-content-end gap-3 flex-wrap"

        >
          <div class="card position-relative rounded-0 border-0" style="width: 220px">
            <div class="overlay"></div>
            <img
              src="assets/images/sections_img/fndqlfyslyqlmyrsltnlkbr.jpg"
              class="card-img-top img-fluid h-100"
              alt="خدماتنا"
            loading="lazy"/>
            <div class="body position-absolute">
              <a href="#" class="card-text"> حفلات عامه + خاصة</a>
            </div>
          </div>
          <div class="card position-relative rounded-0 border-0" style="width: 220px">
            <div class="overlay"></div>
            <img
              src="assets/images/sections_img/Conference-organizing-companies-in-Abu-Dhabi-Body-01-20220621-ar-1024x640.jpg"
              class="card-img-top img-fluid h-100"
              alt="خدماتنا"
            loading="lazy"/>
            <div class="body position-absolute">
              <a href="#" class="card-text"> فعاليات ومؤتمرات</a>
            </div>
          </div>
          <div class="card position-relative rounded-0 border-0" style="width: 220px">
            <div class="overlay"></div>
            <img
              src="assets/images/sections_img/FFXTB0OWUAQl-tr.jpeg"
              class="card-img-top img-fluid h-100"
              alt="خدماتنا"
            loading="lazy"
            />
            <div class="body position-absolute">
              <a href="#" class="card-text"> بيع شاشات عملاقة</a>
            </div>
          </div>


        </div>
        <div class="spical">
          <h3>رؤيتنا</h3>
          @foreach ($principles as $principle )
          <p>
            {{ $principle->vision }}
          </p>


        </div>
        <div class="spical">
          <h3>رسالتنا</h3>
          <p>
            {{ $principle->message }}
          </p>
        </div>
        <div class="spical">
          <h3>فلسفتنا</h3>
          <p>
            {{ $principle->philosophy }}
          </p>
          @endforeach
        </div>
        <a href="{{ route('website.contact-us') }}" class="btn btn-primary rounded-0" type="button">تواصل معنا</a>
      </div>
    </section>
    <!-- End OurServices -->

    <!-- Start Partners -->
    <section class="partners text-center ">
      <h2 >شركاء النجاح</h2>

<!-- Carsoul -->

<div class="main-carousel">
  <div class="cell"><img src="assets/images/partners/1.png" alt=""loading="lazy"></div>
  <div class="cell"><img src="assets/images/partners/3.png" alt=""loading="lazy"></div>
  <div class="cell"><img src="assets/images/partners/5.png" alt=""loading="lazy"></div>
  <div class="cell"><img src="assets/images/partners/7.jpg" alt=""loading="lazy"></div>
  <div class="cell"><img src="assets/images/partners/9.jpg" alt="" loading="lazy"></div>
  <div class="cell"><img src="assets/images/partners/11.jpeg" alt=""loading="lazy"></div>
  <div class="cell"><img src="assets/images/partners/14.jpeg" alt=""loading="lazy"></div>
  <div class="cell"><img src="assets/images/partners/2.png" alt="" loading="lazy"></div>
  <div class="cell"><img src="assets/images/partners/4.svg" alt=""loading="lazy"></div>
  <div class="cell"><img src="assets/images/partners/6.webp" alt=""loading="lazy"></div>
  <div class="cell"><img src="assets/images/partners/8.jpg" alt=""loading="lazy"></div>
  <div class="cell"><img src="assets/images/partners/10.png" alt=""loading="lazy"></div>
  <div class="cell"><img src="assets/images/partners/12.jpeg" alt=""loading="lazy"></div>
  <div class="cell"><img src="assets/images/partners/14.jpeg" alt=""loading="lazy"></div>
</div>

    </section>
    <!-- End Partners -->

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

