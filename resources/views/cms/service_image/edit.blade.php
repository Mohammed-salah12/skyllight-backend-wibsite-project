@extends('cms.parent')

@section('title' , 'صور الخدمة')

@section('page title' , 'تعديل صور الخدمة')

@section('active title' , 'تعديل صور الخدمة')


@section('styles')

@endsection



@section('content')
<section class="container-fluid">
<div class="card card-primary">
    <div class="card-header">
      <h3 class=" text-left">تعديل صور الخدمة </h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form>
      <div class="card-body">
        <div class="row">
            <div class="col-md-6">

         </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <label for="image">الصورة</label>
                <input type="file" class="form-control" id="image" name="image" placeholder="">
            </div>
        </div>

      </div>


      <!-- /.card-body -->

      <div class="card-footer">
        <button type="button" onclick="performUpdate({{ $service_images->id }})" class="btn btn-primary">تعديل</button>
        <a href="{{ route('service_images.index') }}" type="button" class="btn btn-secondary">إلغاء</a>
      </div>
    </form>
  </div>
</section>
@endsection


@section('scripts')
<script>
    function performUpdate(id){
      let formData = new FormData();
      formData.append('image', document.getElementById('image').files[0]);

      storeRoute('/cms/admin/update-service_images/'+id , formData);
    }

  </script>
@endsection
