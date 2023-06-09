
@extends('cms.parent')

@section('title' , 'شركاء النجاح')

@section('main_title' , 'عرض شركاء النجاح')

@section('sub_title' , 'عرض شركاء النجاح')


@section('styles')

@endsection

@section('page title', 'شركاء النجاح')
@section('active title', 'عرض صفحة شركاء النجاح')

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
                                    <th>وصف صفحة شركاء النجاح</th>
                                    <th>تعديل</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($partners as $partner)
                                <tr>
                                    <td><textarea class="form-control" cols="30" rows="6" 	readonly >{{ $partner->title }}</textarea></td>
                                    <td>
                                    <div class="btn group">
                                          <a href="{{ route('partners.edit' , $partner->id ) }}" type="button" class="btn btn-info">
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
                {{-- {{ $partners->links() }} --}}
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')

@endsection
