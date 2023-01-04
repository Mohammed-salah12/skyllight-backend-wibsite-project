@extends('cms.parent')

@section('title' , 'المبادئ')

@section('main_title' , 'عرض المبادئ')

@section('sub_title' , 'تعديل محتوى المبادئ')


@section('styles')

@endsection

@section('page title', 'المبادئ')
@section('active title', 'تعديل محتوى المبادئ')


@section('content')
<section class="container-fluid">
<div class="card card-primary">
    <div class="card-header">
      <h3 style="float: right" class="card-title">تعديل محتوى المبادئ</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form>
      <div class="card-body">
        <div class="form-group">
          <label for="vision"> ادخل نص رؤيتنا الجديد</label>
          <textarea class="form-control" name="vision" id="vision" cols="30" rows="10" >{{ $principles->vision }}</textarea>
          <label for="message"> ادخل نص رسالتنا الجديد</label>
          <textarea class="form-control" name="message" id="message" cols="30" rows="10" >{{ $principles->message }}</textarea>
          <label for="philosophy"> ادخل نص فلسفتنا الجديد</label>
          <textarea class="form-control" name="philosophy" id="philosophy" cols="30" rows="10" >{{ $principles->philosophy }}</textarea>
          <label for="brief"> ادخل نص نبذة الجديد</label>
          <textarea class="form-control" name="brief" id="brief" cols="30" rows="10" >{{ $principles->brief }}</textarea>
        </div>

      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="button" onclick="performUpdate({{ $principles->id }})" class="btn btn-primary">تحديث</button>
        <a href="{{ route('principles.index') }}" type="button" class="btn btn-secondary">إلغاء</a>
      </div>
    </form>
  </div>
</section>
@endsection


@section('scripts')
<script>
    function performUpdate(id){
      let formData = new FormData();
      formData.append('vision',document.getElementById('vision').value);
      formData.append('message',document.getElementById('message').value);
      formData.append('philosophy',document.getElementById('philosophy').value);
      formData.append('brief',document.getElementById('brief').value);
      storeRoute('/cms/admin/update-principles/'+id , formData);
    }
  </script>
@endsection
