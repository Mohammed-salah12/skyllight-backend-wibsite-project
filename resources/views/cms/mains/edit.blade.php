@extends('cms.parent')

@section('title' , 'الصفحة الرئيسية')

@section('main_title' , 'عرض الصفحة الرئيسية')

@section('sub_title' , 'تعديل محتوى الصفحة الرئيسية')


@section('styles')

@endsection

@section('page title', 'الصفحة الرئيسية')
@section('active title', 'تعديل محتوى الصفحة الرئيسية')


@section('content')
<section class="container-fluid">
<div class="card card-primary">
    <div class="card-header">
      <h3 style="float: right" class="card-title">تعديل محتوى الصفحة الرئيسية</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form>
      <div class="card-body">
        <div class="form-group">
          <label for="main_title"> ادخل العنوان الاساسي الجديد</label>
          <textarea class="form-control" name="main_title" id="main_title" cols="30" rows="10" >{{ $mains->main_title }}</textarea>
          <label for="sub_title"> ادخل العنوان الفرعي الجديد</label>
          <textarea class="form-control" name="sub_title" id="sub_title" cols="30" rows="10" >{{ $mains->sub_title }}</textarea>
        </div>

      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="button" onclick="performUpdate({{ $mains->id }})" class="btn btn-primary">حدث</button>
        <a href="{{ route('mains.index') }}" type="button" class="btn btn-secondary">إلغاء</a>
      </div>
    </form>
  </div>
</section>
@endsection


@section('scripts')
<script>
    function performUpdate(id){
      let formData = new FormData();
      formData.append('main_title',document.getElementById('main_title').value);
      formData.append('sub_title',document.getElementById('sub_title').value);
      storeRoute('/cms/admin/update-mains/'+id , formData);
    }

  </script>
@endsection
