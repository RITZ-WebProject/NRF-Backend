@extends('layouts.app')
@section('content')

<div class="row mb-3">
    <div class="col-md-12">
        {{-- <div class="card">
            <div class="card-header">
                <div class="card-title">
                    testing
                </div>
            </div>
        </div> --}}
        <h4>Customer's Orders</h4>
    </div>
</div>

<div class="row">
    @if (!$customer_orders || $customer_orders->isEmpty())
    	<div class="row">
            <div class="col-md-7">
                <div class="alert alert-primary">
                    <h4> <i class="ti-help-alt"></i>No Order Found! This customer is logged in and has not placed an order.</h4>
                </div>
            </div>
        </div>
    @else
        @foreach ($customer_orders as $cus_order)
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex flex-row flex-wrap text-sm-left">
                        {{-- <img src="../../../../images/faces/face11.jpg" class="img-lg rounded" alt="profile image"/> --}}
                        <div class="ms-sm-3 ms-md-0 ms-xl-3 mt-2 mt-sm-0 mt-md-2 mt-xl-0">
                            <div class="row">
                                <div class="col-md-6">
                                    <span class="text-success">Order ID</span>
                                </div>
                                <div class="col-md-6">
                                    : <span class="text-success"><a href="{{ url('orders/view', $cus_order->id) }}" class="link-success text-decoration-none hov-link">{{ $cus_order->id }}</a></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    Order Date
                                </div>
                                <div class="col-md-6">
                                    : {{ $cus_order->created_at }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    Recipient Name
                                </div>
                                <div class="col-md-6">
                                    : {{ $cus_order->recipient_name }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    Recipient Phone
                                </div>
                                <div class="col-md-6">
                                    : {{ $cus_order->recipient_phone }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    Delivery Address
                                </div>
                                <div class="col-md-6">
                                    : {{ $cus_order->delivery_address }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    @endif


    {{-- <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-sm-flex flex-row flex-wrap text-center text-sm-left align-items-center">
                    <img src="{{asset('admin/images/faces/admin.png')}}" class="img-lg rounded" alt="profile image"/>
                    <div class="ms-sm-3 ms-md-0 ms-xl-3 mt-2 mt-sm-0 mt-md-2 mt-xl-0">
                        <h6 class="mb-0">Thomas Edison</h6>
                        <p class="text-muted mb-1">thomas@gmail.com</p>
                        <p class="mb-0 text-success font-weight-bold">Developer</p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</div>

@endsection
