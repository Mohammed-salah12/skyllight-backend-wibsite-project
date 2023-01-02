@extends('cms.parent')

@section('title', 'صور أعمال الشركاء')

@section('page title', 'إضافة صور أعمال الشركاء')

@section('active title', 'إضافة صور الشركاء')


@section('styles')

@endsection



@section('content')
    <section class="container-fluid">
        <div class="card card-primary ">
            <div class="card-header">
                <h3 class="text-left">إضافة صور عمل الشريك</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>
                <div class="card-body">
                    <div class="row">


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
            <a href="{{ route('partners_images.index') }}" type="button" class="btn btn-info">العودة للخلف</a>
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

            store('/cms/admin/partners_images', formData)
        }
    </script>
@endsection
