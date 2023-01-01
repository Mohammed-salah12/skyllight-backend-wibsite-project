@extends('cms.parent')

@section('title' , 'خدماتنا')

@section('main_title' , 'إنشاء خدماتنا')

@section('sub_title' , 'إنشاء خدماتنا')


@section('styles')

@endsection



@section('content')
<section class="container-fluid">
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">إضافة عنوان خدماتنا</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form>
      <div class="card-body">
        <div class="form-group">
          <label for="title">عنوان خدماتنا</label>
          <input type="text" class="form-control" id="title" name="title" placeholder="أدخل العنوان">
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="button" onclick="performStore()" class="btn btn-primary">حفظ</button>
        <a href="{{ route('services.index') }}" type="button" class="btn btn-info">العودة للخلف</a>
      </div>
    </form>
  </div>
</section>
@endsection


@section('scripts')
<script>
  function performStore(){
    let formData = new FormData();
    formData.append('title',document.getElementById('title').value);

    store('/cms/admin/services' , formData)
  }

</script>
@endsection
