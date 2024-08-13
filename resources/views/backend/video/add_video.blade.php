@extends('admin.admin_dashboard')
@section('admin')
<!-- fileupload-custom css -->
<link rel="stylesheet" href=" {{asset('backend/assets/css/pages/fileupload.css')}} ">
<div class="row">
    <!-- [ file-upload ] start -->
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>File Upload</h5>
            </div>
            <div class="card-body">
                <form action="{{route('store.video')}} "method="post" enctype="multipart/form-data" class="dropzone">
                    @csrf
                    <div class="fallback">
                        <input name="video" type="file" multiple  accept="video/*" />
                    </div>

                    <div class="text-center m-t-20">
                        <button type="submit" class="btn btn-primary">Envoyer</button>
                    </div>
                </form>
               
            </div>
        </div>
    </div>
    <!-- [ file-upload ] end -->
</div>

<!-- file-upload Js -->
<script src=" {{asset('backend/assets/plugins/fileupload/js/dropzone-amd-module.min.js')}} "></script>

@endsection