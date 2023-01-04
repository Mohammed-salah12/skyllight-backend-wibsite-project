@extends('cms.parent')

@section('title' , 'الخدمة')

@section('page title' , 'تعديل الخدمة')

@section('active title' , 'عدل الخدمة')


@section('styles')

@endsection



@section('content')
<section class="container-fluid">
<div class="card card-primary">
    <div class="card-header">
      <h3 class="">تعديل الخدمة</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form>
      <div class="card-body">
        <div class="form-group">
          <label for="name">اسم الخدمة</label>
          <input type="text" class="form-control" id="name"
          value="{{ $service_descriptions->name }}" name="name" placeholder="أدخل اسم الخدمة">
        </div>
        <div class="form-group">
          <label for="description">الوصف</label>
          <textarea type="text" class="form-control" id="description"
          value="{{ $service_descriptions->description }}"  name="description" placeholder="أدخل الوصف"></textarea>
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="button" onclick="performUpdate({{ $service_descriptions->id }})" class="btn btn-primary">تحديث</button>
        <a href="{{ route('service_descriptions.index') }}" type="button" class="btn btn-secondary">إلغاء</a>
      </div>
    </form>
  </div>
</section>
@endsection


@section('scripts')
<script>
    function performUpdate(id){
      let formData = new FormData();
      formData.append('name',document.getElementById('name').value);
      formData.append('description',document.getElementById('description').value);

      storeRoute('/cms/admin/update-service_descriptions/'+id , formData);
    }

  </script>
@endsection
