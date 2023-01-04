<?php
use App\Models\Principle;
$principles = Principle::all();
?>

@extends('website.parent')

@section('title','من نحن')


@section('styles')

@endsection

@section('content')


    <div class="hero hero-inner">
      <div class="container">
        <div class="overlay"></div>
        <div class="row align-items-center">
          <div class="col-lg-6 mx-auto text-center">
            <div class="intro-wrap mx-auto">
              <h1 class="mb-0 animate__animated animate__fadeInUp">عن شركتنا</h1>
              @foreach ($abouts as $about)
              <p class="text-white">{{ $about->title }}</p>
                @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="about my-5">
      <div class="container">
        <div class="row row-cols-1 row-cols-md-2 g-md-5 g-3">
            <div class="col text-dark">
              <h2 class="animate__animated animate__fadeInUp">من نحن </h2>
              <h5 class="animate__animated animate__fadeInRight">متخصصون في</h5>
              @foreach ($abouts as $about)
              <p>
                {{ $about->expert_description }}
              </p>
              @endforeach


            </div>

            <div class="col pt-5">
              <!-- Carousel
================================================== -->


<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">

      <img src="assets/images/sections_img/Conference-organizing-companies-in-Abu-Dhabi-Body-01-20220621-ar-1024x640.jpg" class="d-block w-100" alt="Wild Landscape" />

    </div>

    <div class="carousel-item">
      <img src="assets/images/sections_img/95046-1937118527.jpg" class="d-block w-100" alt="Camera" />

    </div>



    <div class="carousel-item">
      <img src="assets/images/gallery/4.jpg" class="d-block w-100" alt="Exotic Fruits" />

    </div>
  </div>


  <button class="btnone carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
    data-bs-slide="prev">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>  </button>
  <button class="btntwo carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
    data-bs-slide="next">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  </button>
</div>
            </div>
        </div>
      </div>
    </section>



    <section class="contents">
      <div class="all">
      <div class="container">
        <div class="row row-cols-1 row-cols-md-2 g-md-5 g-3">
            <div class="col text-dark">
              <div class="vision">
                <h3>رؤيتنا</h3>
                @foreach ($principles as $principle)
                <p>
                    {{ $principle->vision }}
                </p>

              </div>
              <div class="message">
                <h3>رسالتنـا</h3>
                <p>
                    {{ $principle->message }}
                </p>
              </div>
              <div class="phalsaph">
                <h3>فلسفتنا</h3>
                <p>
                    {{ $principle->philosophy }}
                </p>
                @endforeach
              </div>

            </div>

            <div class="col d-sm-none">
             <div class="box">
             </div>


            </div>
        </div>
      </div>
    </div>
    </section>

    @endsection

@section('scripts')

@endsection


