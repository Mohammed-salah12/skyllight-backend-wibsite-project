@extends('cms.parent')

@section('title' , 'من نحن')

@section('main_title' , 'عرض من نحن')

@section('sub_title' , 'عرض محتوى من نحن')


@section('styles')

@endsection

@section('page title', 'من نحن')
@section('active title', 'عرض محتوى من نحن')

@section('content')
<section class="content">
    <div class="container-fluid px-2">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead >
                                <tr>
                                    <th>وصف صفحة من نحن</th>
                                    <th>متخصصون في</th>
                                    <th>تعديل</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($abouts as $about)
                                <tr>
                                    <td><textarea class="form-control" cols="30" rows="6" 	readonly >{{ $about->title }}</textarea></td>
                                    <td><textarea class="form-control" cols="30" rows="6" 	readonly >{{ $about->expert_description }}</textarea></td>
                                    <td>
                                    <div class="btn group">
                                          <a href="{{ route('abouts.edit' , $about->id ) }}" type="button" class="btn btn-info">
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
                {{-- {{ $abouts->links() }} --}}
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')

@endsection
