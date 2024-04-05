@extends('layouts.app')
@section('content')

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="card-title">Gallery Edit</h4>
            <a href="{{ route('gallery.index') }}" class="btn btn-sm btn-light"><i class="ti-back-left"></i> back</a>
        </div>
        <div class="card-body">
            <h1>{{$gallery->name}}</h1>
            <form action="{{ route('gallery.update', $gallery->id ) }}" method="POST" enctype="multipart/form-data" id="photoUploadForm">
                @csrf
                <input type="text" class="form-control" name="name"  value="{{$gallery->name}}" required style="width:300px;">
                <input type="text" style="display: none" name="id" value="{{$gallery->id}}" />
                <input id="photo_change" type="file" style="display: none" name="photo" onchange="previewFile()" >

                <div class="row mt-5">
                    <div class="col-4 col-md-3 position-relative">
                        <div style="position: relative">
                            <img id="previewImage" value="{{ $gallery->name }}" src="{{ $gallery->name }}" class="img-fluid img-thumbnail" alt="" style="height: 300px; object-fit: contain;">
                            <label style="position: absolute;bottom:10px;right:10px;color:black;" for="photo_change"><span style="background-color: rgb(88, 88, 230);padding:8px 9px 5px 8px;border-radius:20%;"><i class="ti-reload"></i></span></label>
                        </div>
                    </div>
                </div>

                <button style="float:right" type="submit" class="btn btn-primary me-2">Save</button>
            </form>
        </div>
    </div>

    <script>
        function previewFile() {
            const preview = document.getElementById('previewImage');
            const file = document.querySelector('input[type=file]').files[0];
            const reader = new FileReader();

            reader.onloadend = function () {
                preview.src = reader.result;
            }

            if (file) {
                reader.readAsDataURL(file);
            }
            // else {
            //     preview.src = "{{ asset('path_to_user_photo') }}";
            // }
        }
    </script>

@endsection
