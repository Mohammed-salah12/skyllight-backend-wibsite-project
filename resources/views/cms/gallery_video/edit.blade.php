@extends('cms.parent')

@section('title' , 'معرض سابقة الأعمال')

@section('main_title' , 'تعديل معرض سابقة الأعمال')

@section('sub_title' , 'تعديل معرض سابقة الأعمال')


@section('styles')

@endsection

@section('page title', 'معرض سابقة الأعمال')
@section('active title', 'تعديل معرض سابقة الأعمال')


@section('content')
<section class="container-fluid">
<div class="card card-primary">
    <div class="card-header">
      <h3 style="float: right" class="card-title">تعديل معرض سابقة الأعمال</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form>
      <div class="card-body">
        <div class="form-group">
          <label for="link"> ادخل رابط اليوتيوب للفيديو الجديد</label>
          <input type="text" class="form-control" id="link" value="{{ $gallery_videos->link }}" name="link" placeholder="ادخل رابط اليوتيوب هنا">
        </div>
        <div class="form-group col-md-6">
            <label for="image">الصورة</label>
            <input type="file" class="form-control" id="image" name="image" placeholder="">
        </div>

      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="button" onclick="performUpdate({{ $gallery_videos->id }})" class="btn btn-primary">تحديث</button>
        <a href="{{ route('gallery_videos.index') }}" type="button" class="btn btn-secondary">إلغاء</a>
      </div>
    </form>
  </div>
</section>
@endsection


@section('scripts')
<script>
    function performUpdate(id){
      let formData = new FormData();
      formData.append('link',document.getElementById('link').value);
      formData.append('image', document.getElementById('image').files[0]);
      storeRoute('/cms/admin/update-gallery_videos/'+id , formData);
    }

  </script>
@endsection
