@extends('cms.parent')

@section('title' , 'معرض سابقة الأعمال')

@section('main_title' , ' معرض سابقة الأعمال')

@section('sub_title' , 'اضافة معرض سابقة الأعمال')


@section('styles')

@endsection

@section('page title', 'معرض سابقة الأعمال')
@section('active title', 'معرض سابقة الأعمال')


@section('content')
<section class="container-fluid">
<div class="card card-primary">
    <div class="card-header">
      <h3 style="float: right" class="card-title">اضافة لمعرض سابقة الأعمال</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form>
      <div class="card-body">
        <div class="form-group">
          <label for="link"> ادخل رابط اليوتيوب للفيديو</label>
          <input type="text" class="form-control" id="link" value="" name="link" placeholder="ادخل رابط اليوتيوب هنا">
        </div>
        <div class="form-group col-md-6">
            <label for="image">الصورة</label>
            <input type="file" class="form-control" id="image" name="image" placeholder="">
        </div>

      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="button" onclick="performUpdate()" class="btn btn-primary">اضافة</button>
        <a href="{{ route('gallery_videos.index') }}" type="button" class="btn btn-secondary">الرجوع للخلف</a>
      </div>
    </form>
  </div>
</section>
@endsection


@section('scripts')
<script>
    function performUpdate(){
      let formData = new FormData();
      formData.append('link',document.getElementById('link').value);
      formData.append('image', document.getElementById('image').files[0]);
      store('/cms/admin/gallery_videos', formData)
    }

  </script>
@endsection
