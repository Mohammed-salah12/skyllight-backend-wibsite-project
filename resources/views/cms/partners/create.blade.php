@extends('cms.parent')

@section('title' , 'شركاء النجاح')

@section('main_title' ,  'شركاء النجاح')

@section('sub_title' , 'انشاء شركاء النجاح')


@section('styles')

@endsection

@section('page title', 'انشاء شركاء النجاح')
@section('active title', 'انشاء وصف شركاء النجاح')



@section('content')
<section class="container-fluid">
<div class="card card-primary">
    <div class="card-header">
      <h3 class="text-left">إنشاء وصف شركاء النجاح</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form>
      <div class="card-body">
        <div class="form-group">
          <label for="title">الوصف</label>
          <input type="text" class="form-control" id="title" name="title" placeholder="أدخل الوصف">
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="button" onclick="performStore()" class="btn btn-primary">حفظ</button>
        <a href="{{ route('partners.index') }}" type="button" class="btn btn-info">العودة للخلف</a>
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

    store('/cms/admin/partners' , formData)
  }

</script>
@endsection
