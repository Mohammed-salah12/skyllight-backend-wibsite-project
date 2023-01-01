@extends('cms.parent')

@section('title' , 'الخدمة')

@section('main_title' , 'إنشاء الخدمة')

@section('sub_title' , 'إنشاء الخدمة')


@section('styles')

@endsection



@section('content')
<section class="container-fluid">
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">إنشاء خدمة</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form>
      <div class="card-body">
        <div class="form-group">
          <label for="name">اسم الخدمة</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="أدخل اسم الخدمة">
        </div>
        <div class="form-group">
          <label for="description">الوصف</label>
          <input type="text" class="form-control" id="description" name="description" placeholder="ادخل الوصف">
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="button" onclick="performStore()" class="btn btn-primary">حفظ</button>
        <a href="{{ route('service_descriptions.index') }}" type="button" class="btn btn-info">العودة للخلف</a>
      </div>
    </form>
  </div>
</section>
@endsection


@section('scripts')
<script>
  function performStore(){
    let formData = new FormData();
    formData.append('name',document.getElementById('name').value);
    formData.append('description',document.getElementById('description').value);

    store('/cms/admin/service_descriptions' , formData)
  }

</script>
@endsection
