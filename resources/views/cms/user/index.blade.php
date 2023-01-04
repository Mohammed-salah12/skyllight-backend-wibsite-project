@extends('cms.parent')

@section('title' , 'الأدمن')

@section('page title' , '')

@section('active title' , 'عرض أدمن')


@section('styles')

@endsection




@section('content')
<section class="content">
    <div class="container-fluid px-2">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="">عرض بيانات الأدمن</h3>
                        <a href="{{ route('users.create') }}" type="button" class="btn btn-info">إضافة أدمن جديد</a>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>الصورة</th>
                                    <th>الاسم</th>
                                    <th>اسم المستخدم</th>
                                    <th>رقم الهاتف</th>
                                    <th>الإعدادات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                {{-- <td><span class="tag tag-success">Approved</span></td> --}}
                                <tr>
                                    <td>
                                        <img class="img-circle img-bordered-sm"
                                             src="{{ asset('storage/images/user/'.$user->image) }}"
                                             width="60" height="60" alt="User_Image">
                                    </td>
                                    <td>{{ ($user->first_name . ' ' . $user->last_name ) ?? "" }}</td>
                                    <td>{{ $user->username  }}</td>
                                    <td>{{ $user->mobile ?? "" }}</td>

                                    <td>
                                    <div class="btn group">
                                          <a href="{{ route('users.edit' , $user->id ) }}" type="button" class="btn btn-info">
                                            <i class="fas fa-edit"> </i>
                                         </a>
                                         <button type="button" class="btn btn-info" onclick="performDestroy({{ $user->id }} , this)">
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
                {{ $users->links() }}
            </div>
        </div>
    </div>
</section>
@endsection


@section('scripts')
<script>
  function performDestroy(id , reference){
    let url = "/cms/user/users/"+id;
    confirmDestroy(url, reference);
  }


</script>
@endsection
