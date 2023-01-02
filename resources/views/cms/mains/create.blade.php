@extends('cms.parent')

@section('title' , 'الصفحة الرئيسية')

@section('main_title' ,  'الصفحة الرئيسية')

@section('sub_title' , 'انشاء الصفحة الرئيسية')


@section('styles')

@endsection

@section('page title', 'انشاء الصفحة الرئيسية')
@section('active title', 'انشاء محتوى الصفحة الرئيسية')



@section('content')
<section class="container-fluid">
<div class="card card-primary">
    <div class="card-header">
      <h3 class="text-left">إنشاء محتوى الصفحة الرئيسية</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form>
      <div class="card-body">
        <div class="form-group">
            <label for="main_title"> ادخل العنوان الاساسي</label>
            <textarea class="form-control" name="main_title" id="main_title" cols="30" rows="10" ></textarea>
          </div>
        <div class="form-group">
            <label for="sub_title"> ادخل العنوان الفرعي</label>
            <textarea class="form-control" name="-sub_title" id="sub_title" cols="30" rows="10" ></textarea>
          </div>,
          <div class="form-group col-md-6">
            <label for="videos">الفيديو</label>
            <input type="file" class="form-control" id="videos" name="videos" placeholder="">
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="button" onclick="performStore()" class="btn btn-primary">حفظ</button>
        <a href="{{ route('mains.index') }}" type="button" class="btn btn-info">العودة للخلف</a>
      </div>
    </form>
  </div>
</section>
@endsection


@section('scripts')
<script>
  function performStore(){
    let formData = new FormData();
    formData.append('main_title',document.getElementById('main_title').value);
    formData.append('sub_title',document.getElementById('sub_title').value);
    formData.append('videos', document.getElementById('videos').files[0]);
    store('/cms/admin/mains' , formData)
  }

</script>
@endsection

