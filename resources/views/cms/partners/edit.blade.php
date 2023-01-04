@extends('cms.parent')

@section('title' , 'شركاء النجاح')

@section('main_title' , 'عرض شركاء النجاح')

@section('sub_title' , 'تعديل شركاء النجاح')


@section('styles')

@endsection

@section('page title', 'شركاء النجاح')
@section('active title', 'تعديل وصف شركاء النجاح')


@section('content')
<section class="container-fluid">
<div class="card card-primary">
    <div class="card-header">
      <h3 style="float: right" class="card-title">تعديل وصف شركاء النجاح</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form>
      <div class="card-body">
        <div class="form-group">
          <label for="title"> ادخل وصف شركاء النجاح الجديد</label>
          <textarea class="form-control" name="title" id="title" cols="30" rows="10" >{{ $partners->title }}</textarea>
        </div>

      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="button" onclick="performUpdate({{ $partners->id }})" class="btn btn-primary">تحديث</button>
        <a href="{{ route('partners.index') }}" type="button" class="btn btn-secondary">إلغاء</a>
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
      storeRoute('/cms/admin/update-partners/'+id , formData);
    }

  </script>
@endsection
