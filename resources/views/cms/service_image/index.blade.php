@extends('cms.parent')

@section('title' , 'صور الخدمة')

@section('main_title' , 'عرض صور الخدمة')

@section('sub_title' , 'عرض صور الخدمة')


@section('styles')

@endsection




@section('content')
<section class="content">
    <div class="container-fluid px-2">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        {{-- <h3 class="card-title">Index Data Of Service Images</h3> --}}
                        <a href="{{ route('service_images.create') }}" type="button" class="btn btn-info">إضافة صورة جديدة</a>
                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right"
                                    placeholder="Search">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
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
                                    <th>اسم الخدمة</th>
                                    <th>الإعدادات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($service_images as $service_image)
                                {{-- <td><span class="tag tag-success">Approved</span></td> --}}
                                <tr>
                                    <td>{{ $service_image->id }}</td>
                                    <td>
                                        <img class="img-circle img-bordered-sm"
                                             src="{{ asset('storage/images/service_image/'.$service_image->image) }}"
                                             width="60" height="60" alt="User_Image">
                                    </td>
                                    <td><span class="badge badge-success">{{ $service_image->service_description->name }}</span></td>
                                    <td>
                                    <div class="btn group">
                                          <a href="{{ route('service_images.edit' , $service_image->id ) }}" type="button" class="btn btn-info">
                                            <i class="fas fa-edit"> </i>
                                         </a>
                                          <button type="button" class="btn btn-info" onclick="performDestroy({{ $service_image->id }} , this)">
                                            <i class="fas fa-trash"></i>
                                          </button>
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
                {{ $service_images->links() }}
            </div>
        </div>
    </div>
</section>
@endsection


@section('scripts')
<script>
  function performDestroy(id , reference){
    let url = "/cms/admin/service_images/"+id;
    confirmDestroy(url, reference);
  }


</script>
@endsection
