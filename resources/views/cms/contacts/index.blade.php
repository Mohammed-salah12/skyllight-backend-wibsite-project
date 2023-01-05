
@extends('cms.parent')

@section('title' , 'تواصل معنا')

@section('main_title' , 'عرض تواصل معنا')

@section('sub_title' , 'عرض تواصل معنا')


@section('styles')

@endsection

@section('page title', 'تواصل معنا')
@section('active title', 'عرض صفحة تواصل معنا')

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
                                    <th>وصف صفحة تواصل معنا</th>
                                    <th>تعديل</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($contacts as $contact)
                                {{-- <td><span class="tag tag-success">Approved</span></td> --}}
                                <tr>
                                    <td>
                                        <textarea class="form-control" cols="30" rows="6" 	readonly >{{ $contact->title }}</textarea>
                                    </td>
                                    <td>
                                    <div class="btn group">
                                          <a href="{{ route('contacts.edit' , $contact->id ) }}" type="button" class="btn btn-info">
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
                {{-- {{ $contacts->links() }} --}}
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')

@endsection
