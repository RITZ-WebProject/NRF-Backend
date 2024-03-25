@extends('layouts.app')
@section('content')

    @if (session("success"))
        <div class="alert alert-success">
            {{session("success")}}
        </div>
    @endif
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="card-title">Product gallery</h4>
            <a href="{{ route('products.index') }}" class="btn btn-sm btn-light"><i class="ti-back-left"></i> back</a>
        </div>
        <div class="card-body">
            <form action="{{ route('products.photo.upload') }}" method="POST" enctype="multipart/form-data" id="photoUploadForm">
                @csrf
                <label for="photoupload" style="padding: 10px 15px; background: #248afd; color: white; border-radius: 10px; font-size: 14px; cursor: pointer"><i class="ti-plus"></i>Add more</label>
                <input type="file" class="d-none" id="photoupload" name="photo[]" multiple >
                <input type="hidden" name="product_id" value="{{ $product_id }}">
            </form>
            <div class="row mt-5">
                @if($photoArray[0] != NULL)
                @foreach ($photoArray as $photo)
                <div class="col-4 col-md-3 position-relative">
                    <img src="{{ asset('storage/app/public/product_photos/'.$photo) }}" class="img-fluid img-thumbnail" alt="" style="height: 300px; object-fit: contain;">
                    <form action="{{ route('products.photo.delete') }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="product_id" value="{{ $product_id }}">
                        <input type="hidden" name="photo" value="{{ $photo }}">
                        <button class="btn btn-sm btn-danger position-absolute end-0 bottom-0" onclick="return confirm('Are you sure you want to delete?')"><i class="ti-trash"></i></button>
                    </form>
                </div>
                @endforeach
                @else
                <div class="alert alert-warning">No Images</div>
                @endif
            </div>
        </div>
    </div>
@endsection