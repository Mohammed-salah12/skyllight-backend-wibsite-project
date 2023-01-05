@extends('cms.parent')

@section('title' , 'الرسالة')

@section('page title' , 'تعديل الرسالة')

@section('active title' , 'عدل الرسالة')


@section('styles')

@endsection



@section('content')
<section class="container-fluid">
<div class="card card-primary">
    <div class="card-header">
      <h3 class="">تعديل الخدمة</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form>
      <div class="card-body">
        <div class="form-group">
          <label for="name">اسم الخدمة</label>
          <input type="text" class="form-control" id="name"
          value="{{ $messages->name }}" name="name" placeholder="أدخل الاسم ">
        </div>
        <div class="form-group">
            <label for="phone">اسم الخدمة</label>
            <input type="text" class="form-control" id="phone"
            value="{{ $messages->phone }}" name="phone" placeholder="أدخل رقم الهاتف">
          </div>
          <div class="form-group">
            <label for="email">اسم الخدمة</label>
            <input type="email" class="form-control" id="email"
            value="{{ $messages->email }}" name="email" placeholder="أدخل البريد ">
          </div>
        <div class="form-group">
          <label for="message">الرسالة</label>
          <textarea type="text" rows="6" class="form-control" id="message"
            name="message" placeholder="أدخل الرسالة">{{ $messages->message }}</textarea>
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="button" onclick="performUpdate({{ $messages->id }})" class="btn btn-primary">تحديث</button>
        <a href="{{ route('messages.index') }}" type="button" class="btn btn-secondary">إلغاء</a>
      </div>
    </form>
  </div>
</section>
@endsection


@section('scripts')
<script>
    function performUpdate(id){
      let formData = new FormData();
      formData.append('name',document.getElementById('name').value);
      formData.append('phone',document.getElementById('phone').value);
    formData.append('email',document.getElementById('email').value);
    formData.append('message',document.getElementById('message').value);

      storeRoute('/cms/admin/update-messages/'+id , formData);
    }

  </script>
@endsection
