@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="row">
                <div class="col-12 col-xl-5 mb-4 mb-xl-0">
                    <h4 class="font-weight-bold text-capitalize">Welcome back, <span
                            class="text-uppercase">{{ $user }}</span> !</h4>
                </div>
                {{-- <div class="col-12 col-xl-7">
          <div class="d-flex align-items-center justify-content-between flex-wrap">
            <div class="border-right pe-4 mb-3 mb-xl-0">
              <p class="text-muted">Balance</p>
              <h4 class="mb-0 font-weight-bold">$40079.60 M</h4>
            </div>
            <div class="border-right pe-4 mb-3 mb-xl-0">
              <p class="text-muted">Today’s profit</p>
              <h4 class="mb-0 font-weight-bold">$175.00 M</h4>
            </div>
            <div class="border-right pe-4 mb-3 mb-xl-0">
              <p class="text-muted">Purchases</p>
              <h4 class="mb-0 font-weight-bold">4006</h4>
            </div>
            <div class="pe-3 mb-3 mb-xl-0">
              <p class="text-muted">Downloads</p>
              <h4 class="mb-0 font-weight-bold">4006</h4>
            </div>
            <div class="mb-3 mb-xl-0">
              <button class="btn btn-warning rounded-0 text-white">Downloads</button>
            </div>
          </div>
        </div> --}}
                {{-- <form action="{{ route('index') }}" id="daterangesearch" method="GET"> --}}
                    <div class="widget-content-left">
                        <label class="ml-2"> </label>
                        <div class="btn-group">
                            <input type="text" name="daterange" value="" class="form-control"
                                style="width:210px;" />
                            <input type="text" name="daterangestart" class="d-none" id="daterangestart" value="" />
                            <input type="text" name="daterangeend" class="d-none" id="daterangeend" value="" />
                        </div>
                    </div><br>
                {{-- </form> --}}
            </div>
        </div>
    </div>
    <div class="row no-gutters">
        <div class="col grid-margin stretch-card">
            <div class="card bg-light rounded">
                <div class="card-body">
                    <p class="card-title text-md-center text-xl-left text-uppercase text-dark" style="font-weight:bold">
                        Total</p>
                    <div
                        class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                        <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0 text-dark" id="total_orders">{{ $total_order }}</h3>
                        <i class="ti-shopping-cart-full icon-md text-dark mb-0 mb-md-3 mb-xl-0"></i>
                    </div>
                    <p class="mb-0 mt-2 text-dark" style="font-size: 18px" style="font-size: 18px" id="total_order_price">
                        {{ number_format($total_order_price) }} (MMK) </p>
                    {{-- <p class="mb-0 mt-2 text-success" style="font-size: 18px"> 10.00% <span class="text-body ms-1"><small>(30 days)</small></span></p> --}}
                </div>
            </div>
        </div>
        <div class="col grid-margin stretch-card">
            <div class="card bg-warning rounded">
                <div class="card-body">
                    <p class="card-title text-md-center text-xl-left text-uppercase text-dark" style="font-weight:bold">
                        pending</p>
                    <div
                        class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                        <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0 text-dark" id="pending_orders">{{ $pending_order }}</h3>
                        <i class="ti-shopping-cart-full icon-md text-dark mb-0 mb-md-3 mb-xl-0"></i>
                    </div>
                    <p class="mb-0 mt-2 text-success text-dark" style="font-size: 18px" id="pending_order_price">
                        {{ number_format($pending_order_price) }} (MMK) </p>
                </div>
            </div>
        </div>
        <div class="col grid-margin stretch-card">
            <div class="card bg-success rounded">
                <div class="card-body">
                    <p class="card-title text-md-center text-xl-left text-uppercase text-dark" style="font-weight:bold">
                        Success</p>
                    <div
                        class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                        <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0 text-dark" id="success_orders">{{ $success_order }}</h3>
                        <i class="ti-shopping-cart-full icon-md text-dark mb-0 mb-md-3 mb-xl-0"></i>
                    </div>
                    <p class="mb-0 mt-2 text-success text-dark" style="font-size: 18px" id="success_order_price">
                        {{ number_format($success_order_price) }} (MMK) </p>
                </div>
            </div>
        </div>
        <div class="col grid-margin stretch-card">
            <div class="card bg-primary rounded">
                <div class="card-body">
                    <p class="card-title text-md-center text-xl-left text-uppercase text-dark" style="font-weight:bold">
                        Delivering</p>
                    <div
                        class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                        <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0 text-dark" id="delivered_orders">{{ $delivered_order }}</h3>
                        <i class="ti-shopping-cart-full icon-md text-dark mb-0 mb-md-3 mb-xl-0"></i>
                    </div>
                    <p class="mb-0 mt-2 text-success text-dark" style="font-size: 18px" id="delivered_order_price">
                        {{ number_format($delivered_order_price) }} (MMK) </p>
                </div>
            </div>
        </div>
        <div class="col grid-margin stretch-card">
            <div class="card bg-danger rounded">
                <div class="card-body">
                    <p class="card-title text-md-center text-xl-left text-uppercase text-dark" style="font-weight:bold">
                        Cancelled</p>
                    <div
                        class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                        <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0 text-dark" id="canceled_orders">{{ $cancelled_order }}</h3>
                        <i class="ti-shopping-cart-full icon-md text-dark mb-0 mb-md-3 mb-xl-0"></i>
                    </div>
                    <p class="mb-0 mt-2 text-success text-dark" style="font-size: 18px" id="cancelled_order_price">
                        {{ number_format($cancelled_order_price) }} (MMK) </p>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="row" hidden>
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card position-relative">
        <div class="card-body">
          <p class="card-title">Detailed Reports</p>
          <div id="detailedReports" class="carousel slide detailed-report-carousel position-static pt-2" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">
                  <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-center">
                    <div class="ml-xl-4">
                      <h1>100</h1>
                      <h3 class="font-weight-light mb-xl-4">Products</h3>
                    </div>
                    </div>
                  <div class="col-md-12 col-xl-9">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="table-responsive mb-3 mb-md-0">
                          <table class="table table-borderless report-table">
                            <tr>
                              <td class="text-muted">Products</td>
                              <td class="w-100 px-0">
                                <div class="progress progress-md mx-4">
                                  <div class="progress-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td><h5 class="font-weight-bold mb-0">100</h5></td>
                            </tr>
                        </table>
                        </div>
                      </div>
                      <div class="col-md-6 mt-3">
                        <canvas id="north-america-chart-dark"></canvas>
                        <div id="north-america-legend-dark"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                  <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-center">
                    <div class="ml-xl-4">
                      <h1>$61321</h1>
                      <h3 class="font-weight-light mb-xl-4">Orders</h3>
                    </div>
                  </div>
                  <div class="col-md-12 col-xl-9">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="table-responsive mb-3 mb-md-0">
                          <table class="table table-borderless report-table">
                            <tr>
                              <td class="text-muted">Orders</td>
                              <td class="w-100 px-0">
                                <div class="progress progress-md mx-4">
                                  <div class="progress-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td><h5 class="font-weight-bold mb-0">613</h5></td>
                            </tr>
                            <tr>
                              <td class="text-muted">Users</td>
                              <td class="w-100 px-0">
                                <div class="progress progress-md mx-4">
                                  <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td><h5 class="font-weight-bold mb-0"></h5></td>
                            </tr>
                          </table>
                        </div>
                      </div>
                      <div class="col-md-6 mt-3">
                        <canvas id="south-america-chart-dark"></canvas>
                        <div id="south-america-legend-dark"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#detailedReports" role="button" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>

    {{-- <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Date range</h4>
            <p class="card-description">A simple date range picker</p>
            <div class="input-group input-daterange d-flex align-items-center">
              <input type="text" class="form-control" value="2012-04-05">
              <div class="input-group-addon mx-4">to</div>
              <input type="text" class="form-control" value="2012-04-19">
            </div>
            <h4 class="card-title" style="margin-top: 2rem; font-size:2rem;">Revenue: </h4>
            <h4 class="card-title" style="margin-top: 2rem; font-size:2rem;">Loss: </h4>
            <h4 class="card-title" style="margin-top: 2rem; font-size:2rem;">Profit: </h4>
          </div>
        </div>
    </div> --}}

    {{-- </div> --}}
    <div class="row">
        {{-- <div class="col-md-4 stretch-card grid-margin grid-margin-md-0" hidden>
      <div class="card">
        <div class="card-body">
          <p class="card-title mb-0">Inventory</p>
          <div class="table-responsive">
            <table class="table table-borderless">
              <thead>
                <tr>
                  <th class="ps-0 border-bottom">Product Name</th>
                  <th class="border-bottom">In Stock</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div> --}}
        {{-- <div class="col-md-4 stretch-card grid-margin grid-margin-md-0" hidden>
        <div class="card">
          <div class="card-body">
            <span class="card-title mb-0 text-uppercase" style="margin-right: 150px">Best Selling Products</span>
            <div class="table-responsive">
              <table class="table table-borderless">
                <thead>
                  <tr>
                    <th class="ps-0 border-bottom">Order ID</th>
                    <th class="border-bottom">Customer</th>
                    <th class="border-bottom">Status</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </div> --}}
        <div class="col-md-12 stretch-card grid-margin grid-margin-md-0">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <span class="card-title mb-0 text-uppercase" style="margin-right: 150px">Latest Orders</span>
                        </div>
                        <div class="col-md-6">
                            <span class="badge badge-pill btn btn-light" style="float: right"><a
                                    href="{{ url('/orders') }}"
                                    class="text-decoration-none text-dark text-uppercase">Details &nbsp;&nbsp;<i
                                        class="ti-arrow-right"></i></a></span>
                        </div>

                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="ps-0 border-bottom">No</th>
                                    <th class="ps-0 border-bottom">Order ID</th>
                                    <th class="ps-0 border-bottom">Invoice ID</th>
                                    <th class="border-bottom">Customer</th>
                                    <th class="border-bottom">Status</th>
                                    <th class="border-bottom">Order Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td class="text-muted ps-0">{{ $order->id }}</td>
                                        <td class="text-muted ps-0">{{ $order->invoice_id }}</td>
                                        <td>
                                            {{-- <span>{{$order->customer_name}}</span><br><br>{{ $order->customer_id }} --}}
                                            <p class="mb-0"><span
                                                    class="font-weight-bold me-5">
                                                    {{ $order->customer_name }}</span></p>
                                        </td>
                                        <td class="text-muted ps-0">
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
                                        <td class="text-muted ps-0">
                                            {{ date('d-m-Y , h:i:s A', strtotime($order->created_at)) }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="col-md-4 stretch-card">
      <div class="card">
        <div class="card-body">
          <p class="card-title">Notifications</p>
          <ul class="icon-data-list">
            <li>
              <p class="text-primary mb-1">Isabella Becker</p>
              <p class="text-muted">Sales dashboard have been created</p>
              <small class="text-muted">9:30 am</small>
            </li>
            <li>
              <p class="text-primary mb-1">Adam Warren</p>
              <p class="text-muted">You have done a great job #TW11109872</p>
              <small class="text-muted">10:30 am</small>
            </li>
            <li>
              <p class="text-primary mb-1">Leonard Thornton</p>
              <p class="text-muted">Sales dashboard have been created</p>
              <small class="text-muted">11:30 am</small>
            </li>
            <li>
              <p class="text-primary mb-1">George Morrison</p>
              <p class="text-muted">Sales dashboard have been created</p>
              <small class="text-muted">8:50 am</small>
            </li>
            <li>
              <p class="text-primary mb-1">Ryan Cortez</p>
              <p class="text-muted">Herbs are fun and easy to grow.</p>
              <small class="text-muted">9:00 am</small>
            </li>
          </ul>
        </div>
      </div>
    </div> --}}
    </div>
@endsection
