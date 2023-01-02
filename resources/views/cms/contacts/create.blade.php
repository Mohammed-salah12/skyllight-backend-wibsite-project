@extends('cms.parent')

@section('title' , 'تواصل معنا')

@section('main_title' ,  'تواصل معنا')

@section('sub_title' , 'انشاء تواصل معنا')


@section('styles')

@endsection

@section('page title', 'انشاء تواصل معنا')
@section('active title', 'انشاء وصف تواصل معنا')



@section('content')
<section class="container-fluid">
<div class="card card-primary">
    <div class="card-header">
      <h3 class="text-left">إنشاء وصف تواصل معنا</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form>
      <div class="card-body">
        <div class="form-group">
            <label for="title"> ادخل وصف تواصل معنا</label>
            <textarea class="form-control" name="title" id="title" cols="30" rows="10" ></textarea>
          </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="button" onclick="performStore()" class="btn btn-primary">حفظ</button>
        <a href="{{ route('contacts.index') }}" type="button" class="btn btn-info">العودة للخلف</a>
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

    store('/cms/admin/contacts' , formData)
  }

</script>
@endsection
