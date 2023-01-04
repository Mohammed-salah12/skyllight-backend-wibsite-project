@extends('cms.parent')

@section('title' , 'المبادئ')

@section('main_title' , 'عرض المبادئ')

@section('sub_title' , 'انشاء محتوى المبادئ')


@section('styles')

@endsection

@section('page title', 'المبادئ')
@section('active title', 'انشاء محتوى المبادئ')


@section('content')
<section class="container-fluid">
<div class="card card-primary">
    <div class="card-header">
      <h3 style="float: right" class="card-title">انشاء محتوى المبادئ</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form>
      <div class="card-body">
        <div class="form-group">
            <label for="brief"> ادخل نص نبذة الجديد</label>
          <textarea class="form-control" name="brief" id="brief" cols="30" rows="10" ></textarea>
          <label for="vision"> ادخل نص رؤيتنا الجديد</label>
          <textarea class="form-control" name="vision" id="vision" cols="30" rows="10" ></textarea>
          <label for="message"> ادخل نص رسالتنا الجديد</label>
          <textarea class="form-control" name="message" id="message" cols="30" rows="10" ></textarea>
          <label for="philosophy"> ادخل نص فلسفتنا الجديد</label>
          <textarea class="form-control" name="philosophy" id="philosophy" cols="30" rows="10" ></textarea>

        </div>

      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="button" onclick="performUpdate()" class="btn btn-primary">تحديث</button>
        <a href="{{ route('principles.index') }}" type="button" class="btn btn-secondary">إلغاء</a>
      </div>
    </form>
  </div>
</section>
@endsection


@section('scripts')
<script>
    function performUpdate(){
      let formData = new FormData();
      formData.append('vision',document.getElementById('vision').value);
      formData.append('message',document.getElementById('message').value);
      formData.append('philosophy',document.getElementById('philosophy').value);
      formData.append('brief',document.getElementById('brief').value);
      store('/cms/admin/principles', formData);
    }
  </script>
@endsection
