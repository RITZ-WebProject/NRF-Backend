@extends('layouts.app')
@section('content')

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h4 class="card-title">Gallery</h4>
        <a href="{{ route('gallery.index') }}" class="btn btn-sm btn-light"><i class="ti-back-left"></i> back</a>
    </div>
    <div class="card-body">
        <label for="photoupload" style="padding: 10px 15px;  color: white; border-radius: 10px; font-size: 54px; cursor: pointer">{{$gallery->name}}</label>
        <div class="row mt-5">
            <div class="col-4 col-md-3 position-relative">
                <img src="{{ asset('storage/app/public/galleries/'.$gallery->photo_url) }}" class="img-fluid img-thumbnail" alt="" style="height: 300px; object-fit: contain;">
            </div>
        </div>
    </div>
</div>

@endsection
