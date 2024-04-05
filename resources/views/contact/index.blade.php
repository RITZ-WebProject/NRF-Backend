@extends('layouts.app')
@section('content')

@if (session("info"))
        <div class="alert alert-info">
            {{session("info")}}
        </div>
    @endif
<div class="card">
    <div class="card-body">
      <h4 class="card-title d-inline">Contact LIST</h4>
      <div class="row">
        <div class="col-12">
          <div class="table-responsive">
            <table id="list-about" class="table">
              {{-- id ="order-listing" original id --}}
              <thead>
                <tr>
                    <th>No</th>
                    <th>Company-Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
              </thead>
              <tbody>
                    @php $i = 1; @endphp
                    @foreach ($cont_data as $data)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $data->company_name }}</td>
                        <td>{{$data->address}}</td>
                        <td>{{$data->phone}}</td>
                       
                        <td class="text-center">
                          
                          <a href="{{ route('contact.edit', $data->id) }}">
                            <button class="btn btn-outline-warning btn-sm"> <i class="ti-pencil-alt"></i> </button>
                          </a>
                          
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
