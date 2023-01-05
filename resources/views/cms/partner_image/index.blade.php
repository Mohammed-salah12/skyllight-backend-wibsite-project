@extends('cms.parent')

@section('title' , 'صور أعمال الشركاء')

@section('page title' , 'عرض صور أعمال الشركاء')

@section('active title' , 'عرض صور أعمال الشركاء')


@section('styles')

@endsection




@section('content')
<section class="content">
    <div class="container-fluid px-2">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-info">
                        <h3 class=" ">عرض صور أعمال الشركاء</h3>
                        <a href="{{ route('partner_images.create') }}" type="button" class="btn btn-info">إضافة صورة جديدة</a>
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
                                    <th>صورة عمل الشريك</th>
                                    <th>الإعدادات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($partner_images as $partner_image)
                                {{-- <td><span class="tag tag-success">Approved</span></td> --}}
                                <tr>
                                    <td>{{ $partner_image->id }}</td>
                                    <td>
                                        <img class="img-circle img-bordered-sm"
                                             src="{{ asset('storage/images/partner_image/'.$partner_image->image) }}"
                                             width="60" height="60" alt="User_Image">
                                    </td>
                                    <td>
                                    <div class="btn group">
                                          <a href="{{ route('partner_images.edit' , $partner_image->id ) }}" type="button" class="btn btn-info">
                                            <i class="fas fa-edit"> </i>
                                         </a>
                                         <button type="button" class="btn btn-danger" onclick="performDestroy({{ $partner_image->id }} , this)">
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
                {{ $partner_images->links() }}
            </div>
        </div>
    </div>
</section>
@endsection


@section('scripts')
<script>
  function performDestroy(id , reference){
    let url = "/cms/admin/partner_images/"+id;
    confirmDestroy(url, reference);
  }


</script>
@endsection
