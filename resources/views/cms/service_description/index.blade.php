@extends('cms.parent')

@section('title' , 'خدمة')

@section('page title' , 'عرض الخدمة')

@section('active title' , 'عرض الخدمة')


@section('styles')

@endsection




@section('content')
<section class="content">
    <div class="container-fluid px-2">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-left">عرض الخدمات</h3>



                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>رقم المعرف</th>
                                    <th>اسم الخدمة</th>
                                    <th>الوصف</th>
                                    <th>الإعدادات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($service_descriptions as $service_description)
                                {{-- <td><span class="tag tag-success">Approved</span></td> --}}
                                <tr>
                                    <td>{{ $service_description->id }}</td>
                                    <td>{{ $service_description->name }}</td>
                                    <td><textarea class="form-control" cols="30" rows="6" 	readonly >{{ $service_description->description  }}</textarea></td>
                                    <td>
                                    <div class="btn group">
                                          <a href="{{ route('service_descriptions.edit' , $service_description->id ) }}" type="button" class="btn btn-info">
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
