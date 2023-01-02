@extends('cms.parent')

@section('title' , 'الصفحة الرئيسية')

@section('main_title' , 'عرض الصفحة الرئيسية')

@section('sub_title' , 'عرض محتوى الصفحة الرئيسية')


@section('styles')

@endsection

@section('page title', 'الصفحة الرئيسية')
@section('active title', 'عرض محتوى الصفحة الرئيسية')

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
                                    <th>رقم المعرف</th>
                                    <th>العنوان الاساسي</th>
                                    <th>العنوان الفرعي</th>
                                    <th>فيديو الخلفية</th>
                                    <th>تعديل</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($mains as $main)
                                <tr>
                                    <td>{{ $main->id }}</td>
                                    <td><textarea class="form-control" cols="30" rows="6" 	readonly >{{ $main->main_title }}</textarea></td>
                                    <td><textarea class="form-control" cols="30" rows="6" 	readonly >{{ $main->sub_title }}</textarea></td>
                                    <td>

                                        <video playsinline="playsinline" autoplay muted="muted" loop="loop" controls width="200" height="150" src="{{ asset('storage/images/videos/'.$main->video) }}"></video>

                                    </td>
                                    <td>
                                    <div class="btn group">
                                          <a href="{{ route('mains.edit' , $main->id ) }}" type="button" class="btn btn-info">
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
                {{-- {{ $mains->links() }} --}}
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')

@endsection