@extends('cms.parent')

@section('title' , 'الرسالة')

@section('page title' , 'عرض الرسائل')

@section('active title' , 'عرض الرسائل')


@section('styles')

@endsection




@section('content')
<section class="content">
    <div class="container-fluid px-2">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-left">عرض الرسائل</h3>


                        <a href="{{ route('messages.create') }}" type="button" class="btn btn-info">أضف رسالة جديدة</a>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>رقم المعرف</th>
                                    <th>اسم الخدمة</th>
                                    <th>الوصف</th>
                                    <th>الإعدادات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($messages as $message)
                                {{-- <td><span class="tag tag-success">Approved</span></td> --}}
                                <tr>
                                    <td>{{ $message->id }}</td>
                                    <td>{{ $message->name }}</td>
                                    <td>{{ $message->phone }}</td>
                                    <td>{{ $message->email }}</td>
                                    <td>{{ $message->message  }}</td>
                                    <td>
                                    <div class="btn group">
                                          <a href="{{ route('messages.edit' , $message->id ) }}" type="button" class="btn btn-info">
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
                {{ $messages->links() }}
            </div>
        </div>
    </div>
</section>
@endsection


@section('scripts')
<script>
  function performDestroy(id , reference){
    let url = "/cms/admin/messages/"+id;
    confirmDestroy(url, reference);
  }


</script>
@endsection
