@extends('cms.parent')

@section('title' , 'صور الصفحة الرئيسية')

@section('page title' , ' ')

@section('active title' , 'عرض صور الصفحة الرئيسية')


@section('styles')

@endsection




@section('content')
<section class="content">
    <div class="container-fluid px-2">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="">عرض صور الصفحة الرئيسية</h3>
                        <a href="{{ route('main_images.create') }}" type="button" class="btn btn-info">إضافة صورة جديدة</a>
                        <div class="card-tools">



                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>رقم المعرف</th>
                                    <th>صورة الخدمة</th>
                                    <th>الإعدادات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($main_images as $main_image)
                                {{-- <td><span class="tag tag-success">Approved</span></td> --}}
                                <tr>
                                    <td>{{ $main_image->id }}</td>
                                    <td>
                                        <img class="img-circle img-bordered-sm"
                                             src="{{ asset('storage/images/main_image/'.$main_image->image) }}"
                                             width="60" height="60" alt="User_Image">
                                    </td>
                                    <td>
                                    <div class="btn group">
                                          <a href="{{ route('main_images.edit' , $main_image->id ) }}" type="button" class="btn btn-info">
                                            <i class="fas fa-edit"> </i>
                                         </a>

                                          </div>
                                      </td>

                                </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
                {{ $main_images->links() }}
            </div>
        </div>
    </div>
</section>
@endsection


@section('scripts')
<script>
  function performDestroy(id , reference){
    let url = "/cms/admin/main_images/"+id;
    confirmDestroy(url, reference);
  }


</script>
@endsection
