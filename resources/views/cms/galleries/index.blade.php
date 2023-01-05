
@extends('cms.parent')

@section('title' , 'معرض الاعمال')

@section('main_title' , 'عرض معرض الاعمال')

@section('sub_title' , 'عرض معرض الاعمال')


@section('styles')

@endsection

@section('page title', 'معرض الاعمال')
@section('active title', 'عرض معرض الاعمال')

@section('content')
<section class="content">
    <div class="container-fluid px-2">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>وصف صفحة معرض الاعمال</th>
                                    <th>تعديل</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($galleries as $gallery)
                                {{-- <td><span class="tag tag-success">Approved</span></td> --}}
                                <tr>
                                    <td><textarea class="form-control" cols="30" rows="6" 	readonly >{{ $gallery->title }}</textarea></td>
                                    <td>
                                    <div class="btn group">
                                          <a href="{{ route('galleries.edit' , $gallery->id ) }}" type="button" class="btn btn-info">
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
                {{-- {{ $galleries->links() }} --}}
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')

@endsection
