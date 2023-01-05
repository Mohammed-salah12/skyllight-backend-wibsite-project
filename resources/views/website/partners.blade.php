<?php
use App\Models\PartnerImage;
$partner_images = PartnerImage::all();
?>
@extends('website.parent')

@section('title','شركاء النجاح')


@section('styles')

@endsection

@section('content')

    <div class="hero hero-inner">
      <div class="container">
        <div class="overlay"></div>
        <div class="row align-items-center">
          <div class="col-lg-6 mx-auto text-center">
            <div class="intro-wrap mx-auto">
              <h1 class="mb-0 animate__animated animate__fadeInUp">شركاءنا</h1>
              @foreach ($partners as $partner)
              <p class="text-white">{{$partner->title}}</p>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>


  <!-- Start Partners -->
    <section class="py-5">
      <div class="container px-3 px-lg-5 mt-5">
          <div class="row gx-md-2 gx-lg-4 row-cols-2 row-cols-md-4 row-cols-xl-6 justify-content-center">
            @foreach($partner_images as $partner_image)
              <div class="col mb-4">
                  <div class="image-box bg-light w-100 h-100" style="background: inherit !important;">
                      <!-- Product image-->
                      <img class="img img-fluid" style="object-fit: cover;" src="{{ asset('storage/images/partner_image/'.$partner_image->image) }}" alt="شعار" />
                  </div>
              </div>
              @endforeach



          </div>
      </div>
    </section>
    <!-- End Partners -->


    @endsection

    @section('scripts')

    @endsection
