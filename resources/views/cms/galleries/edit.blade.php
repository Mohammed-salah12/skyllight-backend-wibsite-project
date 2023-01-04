
@extends('cms.parent')

@section('title' , 'معرض الاعمال')

@section('main_title' , 'عرض معرض الاعمال')

@section('sub_title' , 'تعديل معرض الاعمال')


@section('styles')

@endsection

@section('page title', 'معرض الاعمال')
@section('active title', 'تعديل معرض الاعمال')


@section('content')
<section class="container-fluid">
<div class="card card-primary">
    <div class="card-header">
      <h3 style="float: right" class="card-title">تعديل وصف معرض الاعمال</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form>
      <div class="card-body">
        <div class="form-group">
          <label for="title"> ادخل وصف معرض الاعمال الجديد</label>
          <textarea class="form-control" name="title" id="title" cols="30" rows="10" >{{ $galleries->title }}</textarea>
        </div>

      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="button" onclick="performUpdate({{ $galleries->id }})" class="btn btn-primary">تحديث</button>
        <a href="{{ route('galleries.index') }}" type="button" class="btn btn-secondary">إلغاء</a>
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
      storeRoute('/cms/admin/update-galleries/'+id , formData);
    }

  </script>
@endsection
