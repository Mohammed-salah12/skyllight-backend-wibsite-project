@extends('cms.parent')

@section('title' , 'من نحن')

@section('main_title' , 'عرض من نحن')

@section('sub_title' , 'تعديل محتوى من نحن')


@section('styles')

@endsection

@section('page title', 'من نحن')
@section('active title', 'تعديل محتوى من نحن')


@section('content')
<section class="container-fluid">
<div class="card card-primary">
    <div class="card-header">
      <h3 style="float: right" class="card-title">تعديل محتوى من نحن</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form>
      <div class="card-body">
        <div class="form-group">
          <label for="title"> ادخل وصف من نحن الجديد</label>
          <textarea class="form-control" name="title" id="title" cols="30" rows="10" >{{ $abouts->title }}</textarea>
          <label for="expert_description"> ادخل نص متخصصون في الجديد</label>
          <textarea class="form-control" name="expert_description" id="expert_description" cols="30" rows="10" >{{ $abouts->expert_description }}</textarea>
        </div>

      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="button" onclick="performUpdate({{ $abouts->id }})" class="btn btn-primary">حدث</button>
        <a href="{{ route('abouts.index') }}" type="button" class="btn btn-secondary">إلغاء</a>
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
      formData.append('expert_description',document.getElementById('expert_description').value);
      storeRoute('/cms/admin/update-abouts/'+id , formData);
    }

  </script>
@endsection
