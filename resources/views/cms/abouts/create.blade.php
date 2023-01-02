@extends('cms.parent')

@section('title' , 'من نحن')

@section('main_title' ,  'من نحن')

@section('sub_title' , 'انشاء من نحن')


@section('styles')

@endsection

@section('page title', 'انشاء من نحن')
@section('active title', 'انشاء وصف من نحن')



@section('content')
<section class="container-fluid">
<div class="card card-primary">
    <div class="card-header">
      <h3 class="text-left">إنشاء وصف من نحن</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form>
      <div class="card-body">
        <div class="form-group">
            <label for="title"> ادخل وصف من نحن</label>
            <textarea class="form-control" name="title" id="title" cols="30" rows="10" ></textarea>
          </div>
        <div class="form-group">
            <label for="expert_description"> ادخل وصف متخصصون في</label>
            <textarea class="form-control" name="expert_description" id="expert_description" cols="30" rows="10" ></textarea>
          </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="button" onclick="performStore()" class="btn btn-primary">حفظ</button>
        <a href="{{ route('abouts.index') }}" type="button" class="btn btn-info">العودة للخلف</a>
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
    formData.append('expert_description',document.getElementById('expert_description').value);
    store('/cms/admin/abouts' , formData)
  }

</script>
@endsection
