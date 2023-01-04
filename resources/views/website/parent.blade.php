<!DOCTYPE html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="{{ asset('website/assets/images/site_icon/ms-icon-70x70.png') }}"/>

    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!-- Animate.css Library -->
    <!-- animate__animated first fixed class-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <!-- Bootstrap Font Icons Library-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
    />
    <!-- Bootstrap Library 5.2 -->
    <link rel="stylesheet" href="{{ asset('website/assets/css/bootstrap.min.css') }}" />
    <!-- My Styling File -->
    <link rel="stylesheet" href="{{ asset('website/assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('website/assets/css/bootstrap-rtl.css') }}" />
    @yield('styles')
    <title>أضواء السماء | @yield('title')</title>
  </head>
  <body>
    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
          <span class="icofont-close js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <!-- Start Nav -->
    <nav class="site-nav">
      <div class="container">
        <div class="site-navigation">
          <div style="width: 150px; height: 100px">
            <a style="width: 100px" href="index.html"
              ><img
                class="img-fluid"
                src="{{ asset('website/assets/images/logo/sky-logo.png') }}"
                alt=""
                loading="lazy"
            /></a>
          </div>

          <ul
            class="js-clone-nav d-none d-lg-inline-block text-left site-menu float-right"
          >
            <li><a href="{{ route('website.index') }}">الصفحة الرئيسية</a></li>
            <li><a href="{{ route('website.about') }}">من نحن</a></li>
            <li><a href="{{ route('website.Services') }}">خدماتنا</a></li>
            <li><a href="{{ route('website.gallery') }}">معرض الاعمال السابقة</a></li>
            <li><a href="{{ route('website.partners') }}">شركاء النجاح</a></li>
            <li><a href="{{ route('website.contact-us') }}">تواصل معنا</a></li>
          </ul>

          <a
            href="#"
            class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light"
            data-toggle="collapse"
            data-target="#main-navbar"
          >
            <span></span>
          </a>
        </div>
      </div>
    </nav>
    <!-- End Nav -->

   @yield('content')

    <!--Start Footer -->
    <footer class="bg-secondary text-white text-center">
      <div class="footer-content" style="
      background: fixed;
      /* background-image:linear-gradient(rgba(4, 17, 33, 0.70), rgba(4, 17, 33, 0.70)) ,url({{ asset('website/assets/images/sections_img/WhatsApp\ Image\ 2022-12-21\ at\ 9.11.24\ PM.jpeg') }}); */
      background-image:linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)) ,url({{ asset('website/assets/images/sections_img/WhatsApp\ Image\ 2022-12-21\ at\ 9.11.24\ PM.jpeg') }});
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      ">
        <!-- footer container -->
      <div class="container p-4">
        <!--Grid row-->
        <div class="row justify-content-between">



          <!--logo-->
          <div class="col-lg-3 col-md-12 mb-4 mb-md-4 my-4">
            <h4 class="text-uppercase mb-4 w-75 m-auto mt-5 mb-4"><img src="{{ asset('website/assets/images/footer/sky-logo-footer.png') }}" alt="logo" class="logo-footer img-fluid" loading="lazy"></h4>
            <div class="d-flex justify-content-center mt-5">
              <div><a class="mx-4" href="#!"><i class="icon bi bi-twitter" style="font-size: 32px;"></i></a></div>
              <div><a class="mx-4" href="#!"><i class="icon bi bi-youtube" style="font-size: 32px;"></i></a></div>
              <div><a class="mx-4" href="https://www.instagram.com/sky_lights20" target="_blank"><i class="icon bi bi-instagram" style="font-size: 32px;"></i></a></div>

            </div>

          </div>
          <!--logo-->

          <!--content-->
          <div class="col-lg-5 col-md-6 mb-4 mb-md-0 my-5 ">
            <h5 class="text-uppercase" style="color: #f6dd7b !important;"> الرئيسية </h5>

            <p class="mt-5 mb-2">
              شركة أضواء السماء لتنظيم المعارض والمؤتمرات وفعاليات داخل وخارج الرياض، حفلات خاصة وعامة
شاشات .. اضاءات .. صوتيات للتنسيق
            </p>
            <p class="mt-4">الهاتف : 0553624717<br>الايميل : Skylightsksa@gmail.com </p>
          </div>
          <!--content-->

          <!--map-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0 mt-5">
              <iframe class="w-100 h-75 mt-3" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3626.117795377257!2d46.864684999999994!3d24.654073399999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2fa7feb5c0f76f%3A0x8a1cf55bcd565939!2z2YXYs9iq2YjYr9i5INi02LHZg9mHINin2LbZiNin2KEg2KfZhNiz2YXYp9ihINmE2KrZhti42YrZhSDYp9mE2YXYudin2LHYtiDZiNin2YTZhdik2KrZhdix2KfYqg!5e0!3m2!1sar!2ssa!4v1672327596349!5m2!1sar!2ssa" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          <!--map-->
        </div>
        <!--Grid row-->
      </div>
      <!-- footer container -->
      </div>


      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgb(0, 0, 0);">
        © 2023 حقوق النشر محفوظة لدى:
        <a class="text-white" href="{{ route('cms.parent') }}">Sky-Lights</a>
      </div>
      <!-- Copyright -->
    </footer>
<!-- End Footer -->

  <!-- Start Loading -->
  <div class="page-loader js-page-loader fade-out" >
    <div></div>
  </div>

  <!-- End Loading -->

  <!-- Start WhatsApp -->
    <div class="arrow">
      <a href="https://wa.me/+966553624717" target="_blank"><i class="bi bi-whatsapp"></i></a>
    </div>
<!-- End WhatsApp -->

    <script src="{{ asset('website/assets/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('website/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('website/assets/js/aos.js') }}"></script>
    <script src="{{ asset('website/assets/js/custom.js') }}"></script>

    @yield('scripts')

  </body>
</html>
