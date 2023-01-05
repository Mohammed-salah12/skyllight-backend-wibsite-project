@extends('cms.parent')

@section('title' , 'المبادئ')

@section('main_title' , 'عرض المبادئ')

@section('sub_title' , 'عرض محتوى المبادئ')


@section('styles')

@endsection

@section('page title', 'المبادئ')
@section('active title', 'عرض محتوى المبادئ')

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
                                    <th>نبذة</th>
                                    <th>رؤيتنا</th>
                                    <th>رسالتنا</th>
                                    <th>فلسفتنا</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($principles as $principle)
                                <tr>
                                    <td><textarea class="form-control" cols="30" rows="10" 	readonly >{{ $principle->brief }}</textarea></td>
                                    <td><textarea class="form-control" cols="30" rows="10" 	readonly >{{ $principle->vision }}</textarea></td>
                                    <td><textarea class="form-control" cols="30" rows="10" 	readonly >{{ $principle->message }}</textarea></td>
                                    <td><textarea class="form-control" cols="30" rows="10" 	readonly >{{ $principle->philosophy }}</textarea></td>

                                    <td>
                                    <div class="btn group">
                                          <a href="{{ route('principles.edit' , $principle->id ) }}" type="button" class="btn btn-info">
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
                {{-- {{ $principles->links() }} --}}
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')

@endsection
