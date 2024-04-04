{{--  @dd($order_details);  --}}
@extends('layouts.app')
@section('content')
    @if (session("info"))
        <div class="alert alert-secondary">
            {{session("info")}}
        </div>
    @endif
<div class="row">
    <div class="row">
        <div class="col-md-8">
            @foreach ($order_details as $detail)
            <h4 class="mb-0 text-white">Order ID : {{ $detail->id }}</h4>
        </div>
        <div class="col-md-4">
            <a href="{{url('/orders')}}" class="float-end btn btn-secondary text-light btn-sm mb-3"> <i class="ti-back-right"></i> Back</a>
        </div>
    </div>

    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Item Summary</th>
                                <th>Size</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total Price
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i = 1; @endphp
                            
                            @foreach ($detail->product as $product)
                            @php $photoArray = json_decode($product->photo, true); @endphp
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <img src="{{ $photoArray[0] ?? ''}}" width="100px" height="100px" alt="" class="rounded">
                                                {{-- <img src="{{ asset('storage/app/public/product_photos/'.$photoArray[0]) }}" width="100px" alt="" class="rounded"> --}}
                                            </div>
                                            <div class="col-sm-9">
                                                {{ $product->id }} <br><br>
                                                {{ $product->product_name }}
                                                {{-- <span class="badge badge-pill badge-light"> --}}
                                                    {{-- {{ $detail->size }} --}}
                                                {{-- </span> --}}

                                            </div>
                                        </div>


                                    </td>
                                    <td>{{ $detail->size }}</td>
                                    <td>{{ number_format($detail->price) }}</td>
                                    <td> x 1</td>
                                    {{-- <td>{{ $detail->on_discount }} % </td> --}}
                                    <td>{{ number_format($detail->price) }} MMK </td>
                                    {{-- <td>
                                        <a href="{{ $detail->id }}"><i class="ti-pencil-alt"></i></a>
                                    </td> --}}
                                </tr>
                            {{--  @endforeach
                            @endforeach  --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- /////////////// Edit Quantity Old Version /////////////////// --}}

        {{-- <div class="card mt-5" id="edit_table">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Item Summary</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Discount (%)</th>
                                <th>Total Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i = 1; @endphp
                            @foreach ($order_details as $detail)
                                <tr data-id="{{ $detail->id }}">
                                    <input type="text" value="{{ $detail->id }}" id="product_id" hidden>
                                    <td>{{ $i++ }}</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <img src="{{ asset('storage/app/public/product_photos/'.$detail->photo) }}" width="100px" alt="" class="rounded">
                                            </div>
                                            <div class="col-sm-9">
                                                {{ $detail->product_id }} :
                                                {{ $detail->product_name }} <br> <br>
                                                {{ $detail->color }} , {{ $detail->size_chart }}

                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $detail->original_price }}</td>

                                    <form action="{{ url('orders/view/'.$detail->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')

                                        <td>
                                            <div class="input-group">
                                                <input type="number" name="quantity" value="{{ $detail->quantity }}" class="form-control" min="1" style="width: 40%" id="quantity">
                                            <button class="btn btn-dark btn-sm"><i class="ti-save"></i></button>
                                            </div>
                                        </td>
                                    </form>


                                    <td>{{ $detail->on_discount }} % </td>
                                    <td>{{ $detail->total_price }} MMK </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> --}}
        {{-- /////////////////// --}}
    </div>


    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5>Order Status Update</h5>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        {{--  @foreach ($order_details as $order_info)
                        @dd($order_info)  --}}
                        <form action="{{ url('orders/status/'.$detail->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <label>Order Status</label>
                            <div class="input-group">
                                <select name="status" class="form-select bg-dark text-white">
                                    <option value="">Select Order Status</option>
                                    <option value="pending" {{ ($detail->status == "pending")? "selected" : "" }}>Pending</option>
                                    <option value="confirmed" {{ ($detail->status == "confirmed")? "selected" : "" }}>Confirmed</option>
                                    <option value="success" {{ ($detail->status == "success")? "selected" : "" }}>Success</option>
                                    <option value="delivering" {{ ($detail->status == "delivering")? "selected" : "" }}>Delivering</option>
                                    <option value="cancelled" {{ ($detail->status == "cancelled")? "selected" : "" }}>Cancelled</option>
                                </select>
                                <button class="btn btn-light text-dark">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-body">
                <h5>Order Summary</h5>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <p>Order Created</p>
                    </div>
                    <div class="col-md-6">
                        <p>: {{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $detail->created_at)->format('M j, Y, g:i a')}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p>Total Price</p>
                    </div>
                    <div class="col-md-6">
                        {{--  @dd($detail->invoice);  --}}
                        <p>: {{ number_format($detail->price) }} MMK</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p>Order Status</p>
                    </div>
                    <div class="col-md-6">
                        @if ($detail->status == 'pending')
                            <span class="badge badge-pill badge-warning">
                                {{ $detail->status }}
                            </span>
                        @elseif ($detail->status == 'success')
                            <span class="badge badge-pill badge-success">
                                {{ $detail->status }}
                            </span>
                        @elseif ($detail->status == 'delivered')
                            <span class="badge badge-pill badge-primary">
                                {{ $detail->status }}
                            </span>
                        @elseif ($detail->status == 'confirmed')
                            <span class="badge badge-pill badge-info">
                            	{{ $detail->status }}
                            
                        @else
                            <span class="badge badge-pill badge-danger">
                                {{ $detail->status }}
                            </span>
                        @endif
                    </div>
                </div>

            </div>
        </div>
        <div class="card mt-3">
            <div class="card-body">
                <h5>Delivery Address</h5> <hr>
                <div class="row">
                    <div class="col-md-6">
                        <p>Customer Name</p>
                    </div>
                    <div class="col-md-6">
                        <p>: {{ $detail->deli_info->recipient_name ?? ''}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p>Phone Number</p>
                    </div>
                    <div class="col-md-6">
                        <p>: {{ $detail->deli_info->recipient_phone ?? ''}} </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p>Division</p>
                    </div>
                    <div class="col-md-6">
                        <p>: {{ $detail->deli_info->division->division_name ?? ''}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p>District</p>
                    </div>
                    <div class="col-md-6">
                        <p>: {{ $detail->deli_info->district->district_name ?? ''}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p>Township</p>
                    </div>
                    <div class="col-md-6">
                        <p>: {{ $detail->deli_info->township->township_name ?? ''}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p>Address</p>
                    </div>
                    <div class="col-md-6">
                        <p>: {{ $detail->deli_info->delivery_address ?? ''}}</p>
                    </div>
                </div>
            </div>
        </div>
@endforeach
@endforeach
    </div>
</div>

@endsection
