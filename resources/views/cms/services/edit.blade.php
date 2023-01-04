@extends('cms.parent')

@section('title' , 'خدماتنا')

@section('main_title' ,  'خدماتنا')

@section('sub_title' , 'تعديل خدماتنا')


@section('styles')

@endsection

@section('page title', 'تعديل خدماتنا')
@section('active title', 'تعديل وصف خدماتنا')


@section('content')
<section class="container-fluid">
<div class="card card-primary">
    <div class="card-header">
      <h3 style="float: right" class="card-title">تعديل وصف خدماتنا</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form>
      <div class="card-body">
        <div class="form-group">
          <label for="title"> ادخل وصف خدماتنا الجديد</label>
          <textarea class="form-control" name="title" id="title" cols="30" rows="10" >{{ $services->title }}</textarea>
        </div>

      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="button" onclick="performUpdate({{ $services->id }})" class="btn btn-primary">تحديث</button>
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
