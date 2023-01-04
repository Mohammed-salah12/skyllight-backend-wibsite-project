@extends('cms.parent')

@section('title' , 'تواصل معنا')

@section('main_title' , 'عرض تواصل معنا')

@section('sub_title' , 'تعديل تواصل معنا')


@section('styles')

@endsection

@section('page title', 'تواصل معنا')
@section('active title', 'تعديل صفحة تواصل معنا')


@section('content')
<section class="container-fluid">
<div class="card card-primary">
    <div class="card-header">
      <h3 style="float: right" class="card-title">تعديل وصف تواصل معنا</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form>
      <div class="card-body">
        <div class="form-group">
          <label for="title"> ادخل وصف تواصل معنا الجديد</label>
          <textarea class="form-control" name="title" id="title" cols="30" rows="10" >{{ $contacts->title }}</textarea>
        </div>


      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="button" onclick="performUpdate({{ $contacts->id }})" class="btn btn-primary">تحديث</button>
        <a href="{{ route('contacts.index') }}" type="button" class="btn btn-secondary">إلغاء</a>
      </div>
    </form>
  </div>
</section>
@endsection


@section('scripts')
<script>
    function performUpdate(id){
      let formData = new FormData();
      formData.append('title',document.getElementById('title').value);
      storeRoute('/cms/admin/update-contacts/'+id , formData);
    }

  </script>
@endsection
