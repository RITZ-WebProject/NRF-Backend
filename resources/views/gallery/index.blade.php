@extends('layouts.app')
@section('content')
@if (session("info"))
        <div class="alert alert-secondary">
            {{session("info")}}
        </div>
@endif
<div class="card">
    <div class="card-body">
        <div class="row">
            <h4 class="card-title d-inline mt-2 text-uppercase mb-4">Gallery
                <a href="{{ url('galleries/create') }}"><button class="btn btn-primary btn-sm mb-2 float-end"> <i class="fas fa-plus"></i> Add</button></a>
            </h4>
        </div>
      
      <div class="row">
        <div class="col-12">
          <div class="table-responsive">
            <table id="order-listing" class="table">
              <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Photo</th>
                    <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @php $i = 1 @endphp
                @foreach($galleries as $gallery)
                <tr style="width:100%;">
                    <td>{{$i++}}</td>
                    <td>{{$gallery->name}}</td>
                    <td>
                      <img src="{{ $gallery->photo_url }}" alt="{{ $gallery->name }}" style="object-fit: cover;width:100px;height:100px;"  alt="" class="rounded">
                        {{-- <img src="{{ asset('storage/app/public/galleries/'.$gallery->photo_url) }}" style="object-fit: cover;width:100px;height:100px;"  alt="" class="rounded"> --}}
                    </td>
                    <td>
                        <a href="galleries/view/{{$gallery->id}}">
                            <button class="btn btn-outline-primary pt-1 pb-1"><i class="ti-eye"></i></button>
                        </a>
                		<a href="galleries/{{$gallery->id}}/edit" class="text-decoration-none">
                            <button class="btn btn-outline-warning pt-1 pb-1"> <i class="ti-pencil-alt"></i> </button>
                          </a>
                        <form action="{{ url('galleries/delete',['id'=>$gallery->id]) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure want to delete?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" id="PopoverCustomT-1" class="btn btn-outline-danger pt-1 pb-1"><i class="ti-trash"> </i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
