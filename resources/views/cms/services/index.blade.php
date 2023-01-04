@extends('cms.parent')

@section('title' , 'خدماتنا')

@section('main_title' ,  'خدماتنا')

@section('sub_title' , 'عرض خدماتنا')


@section('styles')

@endsection

@section('page title', 'عرض خدماتنا')
@section('active title', 'عرض وصف خدماتنا')

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
                                    <th>رقم المعرف</th>
                                    <th>وصف صفحة خدماتنا</th>
                                    <th>تعديل</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($services as $service)
                                {{-- <td><span class="tag tag-success">Approved</span></td> --}}
                                <tr>
                                    <td>{{ $service->id }}</td>
                                    <td><textarea class="form-control" cols="30" rows="6" 	readonly >{{ $service->title }}</textarea></td>
                                    <td>
                                    <div class="btn group">
                                          <a href="{{ route('services.edit' , $service->id ) }}" type="button" class="btn btn-info">
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
