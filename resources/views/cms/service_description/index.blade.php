@extends('cms.parent')

@section('title' , 'خدمة')

@section('main_title' , 'عرض الخدمة')

@section('sub_title' , 'عرض الخدمة')


@section('styles')

@endsection




@section('content')
<section class="content">
    <div class="container-fluid px-2">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        {{-- <h3 class="card-title">Index Data Of Service</h3> --}}

                        <form action="" method="get" style="margin-bottom:2%;">
                            <div class="row">
                                <div class="input-icon col-md-2">
                                    <input type="text" class="form-control" placeholder="ابحث باستخدام الاسم"
                                       name='name' @if( request()->name) value={{request()->name}} @endif/>
                                      <span>
                                          <i class="flaticon2-search-1 text-muted"></i>
                                      </span>
                                    </div>



                            <div class="col-md-4">
                                  <button class="btn btn-success btn-md" type="submit"> فلترة</button>
                                  <a href="{{route('service_descriptions.index')}}"  class="btn btn-danger"> إنهاء الفلترة</a>
                                  {{-- @can('Create-City') --}}

                                  <a href="{{route('service_descriptions.create')}}"><button type="button" class="btn btn-md btn-primary"> إضافة خدمة جديدة </button></a>
                                  {{-- @endcan --}}
                            </div>

                                 </div>
                        </form>



                        {{-- <a href="{{ route('service_descriptions.create') }}" type="button" class="btn btn-info">Add New Service</a> --}}
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
                                    <th>اسم الخدمة</th>
                                    <th>الوصف</th>
                                    <th>عدد الصور</th>
                                    <th>الإعدادات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($service_descriptions as $service_description)
                                {{-- <td><span class="tag tag-success">Approved</span></td> --}}
                                <tr>
                                    <td>{{ $service_description->id }}</td>
                                    <td>{{ $service_description->name }}</td>
                                    <td>{{ $service_description->description  }}</td>
                                    <td>({{ $service_description->service_images_count }}) صور/ة</td>
                                    <td>
                                    <div class="btn group">
                                          <a href="{{ route('service_descriptions.edit' , $service_description->id ) }}" type="button" class="btn btn-info">
                                            <i class="fas fa-edit"> </i>
                                         </a>
                                          <button type="button" class="btn btn-info" onclick="performDestroy({{ $service_description->id }} , this)">
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
                {{ $service_descriptions->links() }}
            </div>
        </div>
    </div>
</section>
@endsection


@section('scripts')
<script>
  function performDestroy(id , reference){
    let url = "/cms/admin/service_descriptions/"+id;
    confirmDestroy(url, reference);
  }


</script>
@endsection
