@extends('cms.parent')

@section('title' , 'خدماتنا')

@section('main_title' , 'عرض خدماتنا')

@section('sub_title' , 'عرض خدماتنا')


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
                                    <input type="text" class="form-control" placeholder="ابحث باستخدام العنوان"
                                       name='title' @if( request()->title) value={{request()->title}} @endif/>
                                      <span>
                                          <i class="flaticon2-search-1 text-muted"></i>
                                      </span>
                                    </div>



                            <div class="col-md-4">
                                  <button class="btn btn-success btn-md" type="submit"> فلترة</button>
                                  <a href="{{route('services.index')}}"  class="btn btn-danger"> إنهاء الفلترة</a>
                                  {{-- @can('Create-City') --}}

                                  <a href="{{route('services.create')}}"><button type="button" class="btn btn-md btn-primary"> Add new Service </button></a>
                                  {{-- @endcan --}}
                            </div>

                                 </div>
                        </form>



                        {{-- <a href="{{ route('services.create') }}" type="button" class="btn btn-info">Add New Service</a> --}}
                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right"
                                    placeholder="ابحث">

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
                                    <th>عنوان صفحة خدماتنا</th>
                                    <th>الإعدادت</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($services as $service)
                                {{-- <td><span class="tag tag-success">Approved</span></td> --}}
                                <tr>
                                    <td>{{ $service->id }}</td>
                                    <td>{{ $service->title }}</td>
                                    <td>
                                    <div class="btn group">
                                          <a href="{{ route('services.edit' , $service->id ) }}" type="button" class="btn btn-info">
                                            <i class="fas fa-edit"> </i>
                                         </a>
                                          <button type="button" class="btn btn-info" onclick="performDestroy({{ $service->id }} , this)">
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
                {{ $services->links() }}
            </div>
        </div>
    </div>
</section>
@endsection


@section('scripts')
<script>
  function performDestroy(id , reference){
    let url = "/cms/admin/services/"+id;
    confirmDestroy(url, reference);
  }


</script>
@endsection
