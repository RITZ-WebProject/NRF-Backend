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
            <h4 class="card-title d-inline mt-2 text-uppercase mb-4">Country
                <a href="{{ url('countries/create') }}"><button class="btn btn-primary btn-sm mb-2 float-end"> <i class="fas fa-plus"></i> Add</button></a>
            </h4>
        </div>
      {{-- <h4 class="card-title">Customers Information</h4> --}}
      <div class="row">
        <div class="col-12">
          <div class="table-responsive">
            <table id="order-listing" class="table">
              <thead>
                <tr>
                    <th>No</th>
                    <th>Country ID</th>
                    <th>Country Name</th>
                    <th>Postal Code</th>
                    <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @php $i = 1 @endphp
                @foreach($countries as $country)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{ $country->id }}</td>
                    <td>{{$country->name}}</td>
                    <td>{{$country->code}}</td>
                    <td>
                        <a href="countries/view/{{$country->id}}">
                            <button class="btn btn-outline-primary pt-1 pb-1"><i class="ti-eye"></i></button>
                        </a>
                		<a href="countries/{{$country->id}}/edit" class="text-decoration-none">
                            <button class="btn btn-outline-warning pt-1 pb-1"> <i class="ti-pencil-alt"></i> </button>
                          </a>
                        <form action="{{ url('countries/delete',['id'=>$country->id]) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure want to delete?')">
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
