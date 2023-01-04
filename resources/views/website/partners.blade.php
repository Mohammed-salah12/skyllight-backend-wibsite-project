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

              <div class="col mb-4">
                  <div class="image-box bg-light w-100 h-100" style="background: inherit !important;">
                      <!-- Product image-->
                      <img class="img img-fluid" style="object-fit: cover;" src="assets/images/partners/1.png" alt="شعار" />
                  </div>
              </div>
              <div class="col mb-4">
                  <div class="image-box bg-light w-100 h-100" style="background: inherit !important;">
                      <!-- Product image-->
                      <img class="img img-fluid" style="object-fit: cover;" src="assets/images/partners/2.png" alt="شعار" />
                  </div>
              </div>
              <div class="col mb-4">
                  <div class="image-box bg-light w-100 h-100" style="background: inherit !important;">
                      <!-- Product image-->
                      <img class="img img-fluid" style="object-fit: cover;" src="assets/images/partners/3.png" alt="شعار" />
                  </div>
              </div>
              <div class="col mb-4">
                  <div class="image-box bg-light w-100 h-100" style="background: inherit !important;">
                      <!-- Product image-->
                      <img class="img img-fluid" style="object-fit: cover;" src="assets/images/partners/4.svg" alt="شعار" />
                  </div>
              </div>
              <div class="col mb-4">
                  <div class="image-box bg-light w-100 h-100" style="background: inherit !important;">
                      <!-- Product image-->
                      <img class="img img-fluid" style="object-fit: cover;" src="assets/images/partners/5.png" alt="شعار" />
                  </div>
              </div>
              <div class="col mb-4">
                  <div class="image-box bg-light w-100 h-100" style="background: inherit !important;">
                      <!-- Product image-->
                      <img class="img img-fluid" style="object-fit: cover;" src="assets/images/partners/6.webp" alt="شعار" />
                  </div>
              </div>
              <div class="col mb-4">
                  <div class="image-box bg-light w-100 h-100" style="background: inherit !important;">
                      <!-- Product image-->
                      <img class="img img-fluid" style="object-fit: cover;" src="assets/images/partners/7.jpg" alt="شعار" />
                  </div>
              </div>
              <div class="col mb-4">
                  <div class="image-box bg-light w-100 h-100" style="background: inherit !important;">
                      <!-- Product image-->
                      <img class="img img-fluid" style="object-fit: cover;" src="assets/images/partners/8.jpg" alt="شعار" />
                  </div>
              </div>
              <div class="col mb-4">
                  <div class="image-box bg-light w-100 h-100" style="background: inherit !important;">
                      <!-- Product image-->
                      <img class="img img-fluid" style="object-fit: cover;" src="assets/images/partners/9.jpg" alt="شعار" />
                  </div>
              </div>
              <div class="col mb-4">
                  <div class="image-box bg-light w-100 h-100" style="background: inherit !important;">
                      <!-- Product image-->
                      <img class="img img-fluid" style="object-fit: cover;" src="assets/images/partners/10.png" alt="شعار" />
                  </div>
              </div>
              <div class="col mb-4">
                  <div class="image-box bg-light w-100 h-100" style="background: inherit !important;">
                      <!-- Product image-->
                      <img class="img img-fluid" style="object-fit: cover;" src="assets/images/partners/11.jpeg" alt="شعار" />
                  </div>
              </div>
              <div class="col mb-4">
                  <div class="image-box bg-light w-100 h-100" style="background: inherit !important;">
                      <!-- Product image-->
                      <img class="img img-fluid" style="object-fit: cover;" src="assets/images/partners/12.jpeg" alt="شعار" />
                  </div>
              </div>
              <div class="col mb-4">
                  <div class="image-box bg-light w-100 h-100" style="background: inherit !important;">
                      <!-- Product image-->
                      <img class="img img-fluid" style="object-fit: cover;" src="assets/images/partners/13.jpeg" alt="شعار" />
                  </div>
              </div>
              <div class="col mb-4">
                  <div class="image-box bg-light w-100 h-100" style="background: inherit !important;">
                      <!-- Product image-->
                      <img class="img img-fluid" style="object-fit: cover;" src="assets/images/partners/14.jpeg" alt="شعار" />
                  </div>
              </div>


          </div>
      </div>
    </section>
    <!-- End Partners -->


    @endsection

    @section('scripts')

    @endsection
