<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> أضواء السماء |  تسجيل الدخول</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('cms/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('cms/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('cms/dist/css/adminlte.min.css') }}">

  <link rel="stylesheet" href="{{ asset('cms/plugins/toastr/toastr.min.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>موقع أضواء السماء</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card rounded" >
    <div class="card-body login-card-body py-5" style="border-radius:7px;">
      <p class="login-box-msg">تسجيل الدخول لبدء جلستك</p>

      <form action="cms/index3.html" method="post">
        <div class="row">
            <div class="form-group col-md-12 mb-4">
              <input type="text" class="form-control input-lg " id="username" name="username"
                placeholder="اسم المستخدم">
            </div>
            <div class="form-group col-md-12 ">
              <input type="password" class="form-control input-lg" id="password" name="password" placeholder="كلمة المرور">
            </div>

                <div class="col-md-12">

                  <div class="d-flex justify-content-between mb-3">

                    <div class="icheck-primary">

                        <label for="remember" class="ps-1">
                            <input type="checkbox" id="remember">
                          تذكرني
                        </label>

                      </div>

                  </div>

                  <button type="button" onclick="login()" class="btn btn-primary btn-block">تسجيل الدخول</button>

                </div>
              </div>
      </form>

      {{-- <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div> --}}
      <!-- /.social-auth-links -->

      <p class="mb-1 text-center mt-3">
        <a href="forgot-password.html">نسيت كلمة المرور</a>
      </p>

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ asset('cms/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('cms/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('cms/dist/js/adminlte.min.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script src="{{asset('cms/plugins/toastr/toastr.min.js')}}"></script>
<script src="{{asset('cms/js/crud.js')}}"></script>


<script>
function login() {
    // var guard = '{{request('guard')}}';
    axios.post('/cms/user/login', {
      username: document.getElementById('username').value,
      password: document.getElementById('password').value,
      remember_me: document.getElementById('remember').checked,
    //   guard: guard
    })
        .then(function (response) {
        window.location.href = '/cms/admin'
    })
        .catch(function (error) {
            if (error.response.data.errors !== undefined) {
              showErrorMessages(error.response.data.errors);
            } else {
                showMessage(error.response.data);
            }
        });
  }
  </script>
</body>
</html>
