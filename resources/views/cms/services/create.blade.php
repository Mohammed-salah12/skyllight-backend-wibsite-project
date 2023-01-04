@extends('cms.parent')

@section('title' , 'خدماتنا')

@section('main_title' ,  'خدماتنا')

@section('sub_title' , 'انشاء خدماتنا')


@section('styles')

@endsection

@section('page title', 'انشاء خدماتنا')
@section('active title', 'انشاء وصف خدماتنا')



@section('content')
<section class="container-fluid">
<div class="card card-primary">
    <div class="card-header">
      <h3 class="text-left">إنشاء خدماتنا</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form>
      <div class="card-body">
        <div class="form-group">
            <label for="title"> ادخل وصف خدماتنا</label>
            <textarea class="form-control" name="title" id="title" cols="30" rows="10" ></textarea>
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
