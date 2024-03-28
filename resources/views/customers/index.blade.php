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
            <h4 class="card-title d-inline mt-2 text-uppercase mb-4">Customers Information
            </h4>
        </div>
      <div class="row">
        <div class="col-12">
          <div class="table-responsive">
            <table id="order-listing" class="table">
              <thead>
                <tr>
                    <th>No</th>
                    <th>Customer ID</th>
                    <th>Customer Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @php $i = 1 @endphp
                @foreach($customers as $customer)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{ $customer->id }}</td>
                    <td>{{$customer->customer_name}}</td>
                    <td>{{$customer->email}}</td>
                    <td>{{$customer->phone_primary}}</td>
                    <td>
                        <a href="customers/view/{{$customer->id}}">
                            <button class="btn btn-outline-primary pt-1 pb-1"><i class="ti-eye"></i></button>
                        </a>
                	<a href="customers/edit/{{$customer->id}}">
                            <button class="btn btn-outline-warning pt-1 pb-1" data-bs-toggle="modal" data-bs-target="#editCustomerModal{{$customer->id}}"> <i class="ti-pencil-alt"></i> </button>
                        </a>
                        <form action="{{ url('customers/delete',['id'=>$customer->id]) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure want to delete?')">
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
