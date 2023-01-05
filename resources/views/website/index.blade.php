<?php
use App\Models\Principle;
$principles = Principle::all();
use App\Models\MainImage;
$main_images = MainImage::all();
use App\Models\PartnerImage;
$partner_images = PartnerImage::all();
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
      <source src="{{asset('website/assets/videos/سكاي لايت.mp4-1 (1).mp4')}}" loading="lazy" type="video/mp4" />
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
          class="cards d-flex justify-content-center align-content-end gap-3 flex-wrap">
          <div class="card position-relative rounded-0 border-0" style="width: 220px">
            <div class="overlay"></div>
            @foreach ($main_images as $main_image)
            @if ($main_image->id == 1)
            <img
              src="{{ asset('storage/images/main_image/'.$main_image->image)  }}"
              class="card-img-top img-fluid h-100"
              alt="خدماتنا"
            loading="lazy"/>
            @endif
            @endforeach





            <div class="body position-absolute">
              <a href="{{ route('website.gallery') }}" class="card-text"> حفلات عامه + خاصة</a>
            </div>
          </div>
          <div class="card position-relative rounded-0 border-0" style="width: 220px">
            <div class="overlay"></div>
            @foreach ($main_images as $main_image)
            @if ($main_image->id == 2)
            <img
              src="{{ asset('storage/images/main_image/'.$main_image->image)  }}"
              class="card-img-top img-fluid h-100"
              alt="خدماتنا"
            loading="lazy"/>
            @endif
            @endforeach
            <div class="body position-absolute">
              <a href="{{ route('website.Services') }}" class="card-text"> فعاليات ومؤتمرات</a>
            </div>
          </div>
          <div class="card position-relative rounded-0 border-0" style="width: 220px">
            <div class="overlay"></div>
            @foreach ($main_images as $main_image)
            @if ($main_image->id == 3)
            <img
              src="{{ asset('storage/images/main_image/'.$main_image->image)  }}"
              class="card-img-top img-fluid h-100"
              alt="خدماتنا"
            loading="lazy"/>
            @endif
            @endforeach
            <div class="body position-absolute">
              <a href="{{ route('website.gallery') }}" class="card-text"> بيع شاشات عملاقة</a>
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
    @foreach($partner_images as $partner_image)
    <div class="cell"><img src="{{ asset('storage/images/partner_image/'.$partner_image->image) }}" alt=""loading="lazy"></div>
    @endforeach

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

