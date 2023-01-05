@extends('cms.parent')

@section('title' , 'صور أعمال الشركاء')

@section('page title' , 'تعديل صور أعمال الشركاء')

@section('active title' , 'تعديل صور أعمال الشركاء')


@section('styles')

@endsection



@section('content')
<section class="container-fluid">
<div class="card card-primary">
    <div class="card-header">
      <h3 class=" text-left">تعديل صور أعمال الشركاء </h3>
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
        <button type="button" onclick="performUpdate({{ $partner_images->id }})" class="btn btn-primary">تعديل</button>
        <a href="{{ route('partner_images.index') }}" type="button" class="btn btn-secondary">إلغاء</a>
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

      storeRoute('/cms/admin/update-partner_images/'+id , formData);
    }

  </script>
@endsection
