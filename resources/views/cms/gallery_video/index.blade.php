@extends('cms.parent')

@section('title' , 'معرض سابقة الأعمال')

@section('page title' , 'معرض سابقة الأعمال')

@section('active title' , 'معرض سابقة الأعمال')


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
                        <a href="{{ route('gallery_videos.create') }}" type="button" class="btn btn-info">إضافة فيديو جديد</a>
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
                                    <th>رابط اليوتيوب للفيديو</th>
                                    <th>ملصق الفيديو</th>
                                    <th>الإعدادات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($gallery_videos as $gallery_video)
                                {{-- <td><span class="tag tag-success">Approved</span></td> --}}
                                <tr>
                                    <td>{{ $gallery_video->id }}</td>
                                    <td><a href="{{ $gallery_video->link }}">{{ $gallery_video->link }}</a></td>
                                    <td>
                                        <img class="img-circle img-bordered-sm"
                                             src="{{ asset('storage/images/gallery_video/'.$gallery_video->image) }}"
                                             width="60" height="60" alt="User_Image">
                                    </td>
                                    <td>
                                    <div class="btn group">
                                          <a href="{{ route('gallery_videos.edit' , $gallery_video->id ) }}" type="button" class="btn btn-info">
                                            <i class="fas fa-edit"> </i>
                                         </a>
                                          <a href="#" onclick="performDestroy({{ $gallery_video->id }} , this)" type="button" class="btn btn-danger">
                                            <i class="fas fa-trash"> </i>
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
                {{ $gallery_videos->links() }}
            </div>
        </div>
    </div>
</section>
@endsection


@section('scripts')
<script>
  function performDestroy(id , reference){
    let url = "/cms/admin/gallery_videos/"+id;
    confirmDestroy(url, reference);
  }
</script>
@endsection
