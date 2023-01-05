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



                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>رقم المعرف</th>
                                    <th>اسم المرسل</th>
                                    <th>رقم الهاتف</th>
                                    <th>البريد</th>
                                    <th>الرسالة</th>
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
                                    <td><textarea class="form-control" cols="30" rows="6" 	readonly >{{ $message->message  }}</textarea></td>
                                    <td>
                                    <div class="btn group">
                                        <button type="button" class="btn btn-danger" onclick="performDestroy({{ $message->id }} , this)">
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
