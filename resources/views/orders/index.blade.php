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
        <h4 class="card-title d-inline mt-2">ORDER LIST
        </h4>
      </div>
      <div class="col-lg-10">
        <form action="{{ route('orders.index') }}" method="GET" class="d-flex row mb-3">
            <div class="d-flex flex-column col-md-3">
                <label for="start_date" class="mb-2">Start Date</label>
                <input type="date" id="start_date" name="start_date" class="form-control" value="{{ $startDate }}" required>
            </div>
            <div class="d-flex flex-column col-md-3">
                <label for="end_date" class="mb-2">End Date</label>
                <input type="date" id="end_date" name="end_date" class="form-control" value="{{ $endDate }}" required>
            </div>
            <div class="d-flex flex-column col-md-2">
                <button type="submit" class="btn btn-outline-primary mt-4" style="height:40px;">Filter</button>
            </div>
        </form>        
    </div>
    
      <div class="row">
        <div class="col-12">
          <div class="table-responsive">
            <table id="order-listing" class="table">
              <thead>
                <tr>
                    <th>No</th>
                    <th>Order ID</th>
                    <th>Invoice ID</th>
                    <th>Customer</th>
        			<th>Product Name</th>
        			<th>Size</th>
        			<th>Delivery Info</th>
					<th>Payment method</th>
                    <th>Status</th>
        			<th>Edit Order Status</th>
                    <th class="text-center">Action</th>
                </tr>
              </thead>
              <tbody>
                    @php $i = 1; @endphp
                    @foreach ($orders as $order)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td id="order-{{$order->id}}">{{ $order->id }}</td>
                        <td>{{ $order->invoice_id }}</td>
                        <td>{{ $order->customer->customer_name}}</td>
                        @foreach ($order->product as $product)
                    	<td>{{ $product->product_name }}</td>
                        @endforeach
                    	<td>{{ $order->size }}</td>
                    	<td>{{ $order->customer->phone_primary }}<br><br> 
                            {{ $order->deli_info->delivery_address ?? ''}}
                        </td>
						<td><span class="badge badge-pill bg-info">
                            {{ $order->invoice->payment_method ?? ''}}
                        </span></td>
                    <td id="badge-{{ $order->id }}">
                            @if ($order->status == 'pending')
                                <span class="badge badge-pill badge-warning">
                                    {{ $order->status }}
                                </span>
                            @elseif ($order->status == 'success')
                                <span class="badge badge-pill badge-success">
                                    {{ $order->status }}
                                </span>
                            @elseif ($order->status == 'delivering')
                                <span class="badge badge-pill badge-primary">
                                    {{ $order->status }}
                                </span>
                            @elseif ($order->status == 'confirmed')
                                <span class="badge badge-pill badge-info">
                                    {{ $order->status }}
                                </span>
                            @else
                                <span class="badge badge-pill badge-danger">
                                    {{ $order->status }}
                                </span>
                            @endif
                        </td>
                        <td>
                            <form id="update-status-form" action="{{ route('update_status') }}" method="POST">
                                @csrf
                                <input type="hidden" name="order_id" value="{{ $order->id }}">
                                <div class="row g-1">
                                    <div class="col-md-12">
                                        <select name="status" id="{{ $order->id }}" class="status-select form-select bg-light text-dark text-center {{ $order->id }}">
                                            <option value="" disabled class="bg-secondary text-light">Select Order Status</option>
                                            <option value="pending" {{ ($order->status == "pending")? "selected" : "" }}>Pending</option>
                                            <option value="confirmed" {{ ($order->status == "confirmed")? "selected" : "" }}>Confirmed</option>
                                            <option value="success" {{ ($order->status == "success")? "selected" : "" }}>Success</option>
                                            <option value="delivering" {{ ($order->status == "delivering")? "selected" : "" }}>Delivering</option>
                                            <option value="cancelled" {{ ($order->status == "cancelled")? "selected" : "" }}>Cancelled</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </td>
                        <td class="text-center">
                            <a href="orders/view/{{$order->id}}">
                                <button class="btn btn-outline-secondary pt-1 pb-1">
                                    <i class="ti-eye"></i>
                                </button>
                            </a>
                            <a href="orders/invoice/{{$order->invoice_id}}">
                                <button class="btn btn-outline-primary pt-1 pb-1">
                                    <i class="ti-printer"></i>
                                </button>
                            </a>
                            <a href="orders/delete/{{$order->id}}">
                                <button class="btn btn-outline-danger pt-1 pb-1"> <i class="ti-trash"></i> </button>
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
