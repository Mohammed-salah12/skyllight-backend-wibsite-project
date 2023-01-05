@extends('website.parent')

@section('title','تواصل معنا')


@section('styles')

@endsection

@section('content')


    <div class="hero hero-inner">
      <div class="container">
        <div class="overlay"></div>
        <div class="row align-items-center">
          <div class="col-lg-6 mx-auto text-center">
            <div class="intro-wrap mx-auto">
              <h1 class="mb-0 animate__animated animate__fadeInUp">تواصل معنا</h1>
              @foreach ($contacts as $contact)
              <p class="text-white">{{$contact->title}}</p>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="untree_co-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 ml-auto C">
            <h3 class="a">اتصل بنا</h3>
            <div class="widget">
              <div class=" contact ">
                <h6>رقم الهاتف</h6>
                <div dir="ltr" class="A phone"><a href="tel:+966553624717"><i class="fa-solid fa-location-dot"></i> +966553624717</a></div>

              </div>
              <div class="contact">
                <h6>البريد الالكتروني</h6>
                <div class="A email"><a href="mailto: Skylightsksa@gmail.com"><i class="fa-solid fa-location-dot"></i> Skylightsksa@gmail.com</a></div>
              </div>
              <div class=" contact">
                <h6>تابعونا</h6>
                <div class="d-flex justify-content-center mt-3 social">
                  <div><a class="mx-2" href="#!"><i class="bi bi-twitter" style="font-size: 32px;"></i></a></div>
                  <div><a class="mx-2" href="https://www.youtube.com/@skylights6965/featured" target="_blank"><i class="bi bi-youtube" style="font-size: 32px;"></i></a></div>
                  <div><a class="mx-2" href="https://www.instagram.com/sky_lights20" target="_blank"><i class="icon bi bi-instagram" style="font-size: 32px;"></i></a></div>
                </div>
              </div>
            </div>

          </div>
          <div class="col-lg-7 mb-5 mb-lg-0">
            <form class="contact-form" data-aos="fade-up" data-aos-delay="200" method="GET">
              <h4 class="a C B">رأيك يهمنا</h4>
              <div class="form-group">
                <label class="text-black" for="name"></label>
                <input type="text" class="form-control one" id="name" placeholder="الاسم">
              </div>
              <div class="form-group">
                <label class="text-black" for="phone"></label>
                <input type="text" class="form-control one" id="phone" placeholder="رقم الهاتف">
              </div>
              <div class="form-group">
                <label class="text-black" for="email"></label>
                <input type="email" class="form-control one" id="email" placeholder="الايميل">
              </div>

              <div class="form-group">
                <label class="text-black" for="message"></label>
                <textarea name="message" class="form-control one" id="message" cols="30" rows="10" placeholder="الرسالة"></textarea>
              </div>
              <button type="button"  class="btn btn-primary mt-5 send" >أرسل رسالة</button>
            </form>
          </div>

        </div>
      </div>
    </div>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3626.117795377257!2d46.864684999999994!3d24.654073399999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2fa7feb5c0f76f%3A0x8a1cf55bcd565939!2z2YXYs9iq2YjYr9i5INi02LHZg9mHINin2LbZiNin2KEg2KfZhNiz2YXYp9ihINmE2KrZhti42YrZhSDYp9mE2YXYudin2LHYtiDZiNin2YTZhdik2KrZhdix2KfYqg!5e0!3m2!1sar!2ssa!4v1672327596349!5m2!1sar!2ssa" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    @endsection

    @section('scripts')
        <script src="{{asset('cms/js/crud.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        function Store(){
    let formData = new FormData();
    formData.append('name',document.getElementById('name').value);
    formData.append('phone',document.getElementById('phone').value);
    formData.append('email',document.getElementById('email').value);
    formData.append('message',document.getElementById('message').value);

    store('/cms/admin/messages' , formData)
  }
          </script>

<script>
    let inputss = document.querySelectorAll(".one");
    let sendBtn = document.querySelector(".send");
        sendBtn.onclick = (_) => {
            Store();
            for(let i = 0 ; inputss.length ; i++)
            inputss[i].value = "";
        };

  </script>
    @endsection
