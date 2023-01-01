@extends('cms.parent')

@section('title', 'صور الخدمة')

@section('main_title', 'إضافة صور الخدمة')

@section('sub_title', 'إضافة صور الخدمة')


@section('styles')

@endsection



@section('content')
    <section class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">إضافة صور الخدمة</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="serviceDescription_id">اسم الخدمة</label>
                                <select class="form-control select2" id="serviceDescription_id" name="serviceDescription_id" style="width: 100%;">
                                    {{-- <option selected="selected">Alabama</option> --}}
                                    @foreach ($service_descriptions as $service_description)
                                        <option value="{{ $service_description->id }}">{{ $service_description->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="form-group col-md-6">
                            <label for="image">الصورة</label>
                            <input type="file" class="form-control" id="image" name="image" placeholder="">
                        </div>

                    </div>
                </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="button" onclick="performStore()" class="btn btn-primary">حفظ</button>
            <a href="{{ route('service_images.index') }}" type="button" class="btn btn-info">العودة للخلف</a>
        </div>
        </form>
        </div>
    </section>
@endsection


@section('scripts')
    <script>
        function performStore() {
            let formData = new FormData();
            formData.append('image', document.getElementById('image').files[0]);
            formData.append('serviceDescription_id', document.getElementById('serviceDescription_id').value);

            store('/cms/admin/service_images', formData)
        }
    </script>
@endsection
