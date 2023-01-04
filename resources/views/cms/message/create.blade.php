@extends('cms.parent')

@section('title' , ' إنشاء رسالة')

@section('page title' , ' إنشاء رسالة')

@section('active title' , 'إنشاء رسالة')


@section('styles')

@endsection



@section('content')
<section class="container-fluid">
<div class="card card-primary">
    <div class="card-header">
      <h3 class="text-left">إنشاء رسالة</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form>
      <div class="card-body">
        <div class="form-group">
          <label for="name">اسم المرسل</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="أدخل الاسم">
        </div>
        <div class="form-group">
            <label for="phone">رقم المرسل</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="أدخل رقم الهاتف">
          </div>
          <div class="form-group">
            <label for="email">بريد المرسل</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="أدخل البريد">
          </div>
        <div class="form-group">
          <label for="message">الرسالة</label>
          <textarea type="text" class="form-control" id="message" name="message" placeholder="ادخل الوصف"></textarea>
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="button" onclick="performStore()" class="btn btn-primary">حفظ</button>
        <a href="{{ route('messages.index') }}" type="button" class="btn btn-info">العودة للخلف</a>
      </div>
    </form>
  </div>
</section>
@endsection


@section('scripts')
<script>
  function performStore(){
    let formData = new FormData();
    formData.append('name',document.getElementById('name').value);
    formData.append('phone',document.getElementById('phone').value);
    formData.append('email',document.getElementById('email').value);
    formData.append('message',document.getElementById('message').value);

    store('/cms/admin/messages' , formData)
  }

</script>
@endsection
