@extends('cms.parent')

@section('title' , 'خدماتنا')

@section('main_title' , 'تعديل خدماتنا')

@section('sub_title' , 'تعديل خدماتنا')


@section('styles')

@endsection



@section('content')
<section class="container-fluid">
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">تعديل خدماتنا</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form>
      <div class="card-body">
        <div class="form-group">
          <label for="title">تعديل عنوان خدماتنا </label>
          <input type="text" class="form-control" id="title"
          value="{{ $services->title }}" name="title" placeholder="أدخل العنوان">
        </div>

      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="button" onclick="performUpdate({{ $services->id }})" class="btn btn-primary">حدث</button>
        <a href="{{ route('services.index') }}" type="button" class="btn btn-secondary">إلغاء</a>
      </div>
    </form>
  </div>
</section>
@endsection


@section('scripts')
<script>
    function performUpdate(id){
      let formData = new FormData();
      formData.append('title',document.getElementById('title').value);

      storeRoute('/cms/admin/update-services/'+id , formData);
    }

  </script>
@endsection
