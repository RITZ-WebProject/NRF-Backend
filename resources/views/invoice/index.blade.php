@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card px-2">
            <div class="card-body">
                <div class="container-fluid bg-primary">
                  <h3 class="text-right my-5 text-center"><img src="{{ asset('admin/frontend/images/black_NRF.png') }}" alt="photo" width="150px" class="mt-4"></h3>
                  {{-- <h3 class="text-right my-5">Invoice&nbsp;&nbsp;{{ $customer_info->invoice_id }}</h3> --}}
                  <hr>
                </div>
                <div class="container-fluid">
                    <h4 class="text-uppercase text-primary text-center" style="font-weight: bold;font-size:22px">Sales Receipt</h4>
                </div><hr>
                <div class="container-fluid d-flex justify-content-between">
                  <div class="col-lg-4 ps-0">
                    @foreach ($order_info as $info)
                    <div class="row">
                        <div class="col-md-5">
                            <span class="text-uppercase" style="font-size:0.9rem">Receipt No.</span>
                        </div>
                        <div class="col-md-7">
                            : <span style="font-size:0.9rem">{{ $info->customer->id }}</span>
                        </div>
                    </div>
                    @endforeach
                    @foreach ($order_info as $info)
                    <div class="row">
                        <div class="col-md-5">
                            <span class="text-uppercase" style="font-size:0.9rem">Customer</span>
                        </div>
                        <div class="col-md-7">
                            : <span style="font-size:0.9rem">{{ $info->customer->customer_name }}
                        </div>
                    </div>
                    @endforeach
                    <div class="row">
                        <div class="col-md-5">
                            <span class="text-uppercase" style="font-size:0.9rem">Address</span>
                        </div>
                        <div class="col-md-7">
                            : <span style="font-size:0.9rem">{{ $delivery_info->delivery_address ?? '' }}</span>
                        </div>
                    </div>

                    {{-- old invoice --}}
                    {{-- <p class="mt-5 mb-2"><b>NRF Admin</b></p>
                    <p>104,<br>Minare SK,<br>Canada, K1A 0G9.</p> --}}

                  </div>
                  <div class="col-lg-4 pe-0">
                    @foreach ($order_info as $info)
                    <div class="row">
                        <div class="col-md-5">
                            <span class="text-uppercase" style="font-size:0.9rem">Receipt Date</span>
                        </div>
                        <div class="col-md-7">
                            : <span style="font-size:0.9rem">{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $info->created_at)->format('d-m-Y')}}</span>
                        </div>
                        <div class="col-md-5">
                            <span class="text-uppercase" style="font-size:0.9rem">Phone No.</span>
                        </div>
                          <div class="col-md-7">
                              : <span style="font-size:0.9rem">{{ $delivery_info->recipient_phone ?? '' }}</span>
                          </div> 
                        
                        <div class="col-md-5">
                            <span class="text-uppercase" style="font-size:0.9rem">Reference</span>
                        </div>
                        <div class="col-md-7">
                            : <span style="font-size:0.9rem">{{$info->payment_method}}</span>
                        </div>
                    </div>
                    @endforeach

                    {{-- old invoice --}}
                    {{-- <p class="mt-5 mb-2 text-right"><b>Invoice to</b></p>
                    <p class="text-right">
                        {{ $customer_info->recipient_name }} ,<br>
                        {{ $customer_info->recipient_phone }} ,<br>
                        {{ $customer_info->delivery_address }}
                    </p> --}}

                  </div>
                </div>
                <hr>
                {{-- <div class="container-fluid d-flex justify-content-between">
                  <div class="col-lg-3 ps-0">
                    <p class="mb-0 mt-5">Invoice Date :
                        {{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $customer_info->order_date)->format('d-m-Y')}}
                  </div>
                </div> --}}
                <div class="container-fluid mt-5 d-flex justify-content-center w-100">
                  <div class="table-responsive w-100">
                      <table class="table">
                        <thead>
                          <tr class="bg-dark text-white">
                              <th>#</th>
                              <th>Description</th>
                              <th>Size</th>
                              <th class="text-right">Quantity</th>
                              <th class="text-right">Unit Price</th>
                              <th class="text-center">Amount (MMK) </th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i = 1; @endphp
                            @foreach ($order_info as $info)
                            @foreach ($info->order as $prod)
                            @foreach ($prod->product as $product)
                                <tr class="text-right">
                                    <td class="text-left">{{$i++}}</td>
                                    <td class="text-left">{{ $product->product_name }}</td>
                                    <td>{{ $prod->size }}</td>
                                    <td> x 1</td>
                                    <td>{{ number_format($product->price) }}</td>
                                    <td class="text-center">{{ number_format($product->price) }}</td>
                                </tr>
                            @endforeach
                            @endforeach
                            @endforeach
                        </tbody>
                      </table>
                    </div>
                </div>
                <div class="container-fluid mt-5 w-100" style="text-align:right">
                  <p class="text-right mb-2">Sub - Total amount: {{ number_format($total_price) }}</p>
                  <h4 class="text-right mb-5">Total Amount : {{ number_format($total_price) }} (MMK)</h4>
                  <hr>
                </div>
                <div class="container-fluid w-100">
                    <a id="invoicePdfBtn" class="btn btn-warning btn-sm float-right mt-4 ms-2"><i class="ti-printer me-1"></i>Export PDF</a>
                  <a id="printThis" class="btn btn-primary btn-sm float-right mt-4 ms-2"><i class="ti-printer me-1"></i>Print</a>
                  <a href="{{ url('/orders') }}" class="btn btn-secondary btn-sm float-right mt-4 ms-2"><i class="ti-back-right me-1"></i>Back</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="printInvoice" hidden>
    <span id="invoicePdf" style="color:#000;">
        <div style="height:100px">
            <h3 class="text-right my-5 text-center" style="text-align: center">
                {{--  <img src="{{ asset('admin/frontend/images/black_NRF.png') }}" alt="photo" width="200px" style="margin-top:9px">  --}}
            </h3>
           
        </div>
        <div style="margin-top:20px">
            {{--  <h4 style="font-weight: bold;font-size:22px;text-transform:uppercase;text-align:center;color:#1620a8">Sales Receipt</h4>  --}}
        </div>
        {{--  <hr>  --}}
        <br><br><br><br>
        <div style="display: flex; font-size: 13px; align-items: end;">
            <div style="width: 50%; margin-left: 10px">
                {{-- <p class="mt-5 mb-2"><b>NRF Admin</b></p> --}}
                <p>
                @foreach ($order_info as $info)
                    RECEIPT NO. : {{ $info->customer->id }} <br>
                @endforeach
                CUSTOMER &nbsp;&nbsp;: {{ $delivery_info->recipient_name ?? '' }}<br>
                ADDRESS &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{ $delivery_info->delivery_address ?? ''}}
                </p>

                {{-- <p>104,<br>Minare SK,<br>Canada, K1A 0G9.</p> --}}
            </div>
            <div style="width: 50%;text-align: right; margin-right: 10px;">
                {{-- <p class="mt-5 mb-2 text-right"><b>Invoice to</b></p> --}}
                <p>
                    @foreach ($order_info as $info)
                    RECEIPT DATE : {{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $info->created_at)->format('d-m-Y')}} <br>
                    PHONE NO &nbsp;&nbsp;: {{ $delivery_info->recipient_phone ?? '' }}<br>
                    REFERENCE : {{$info->payment_method}} 
                    @endforeach
                </p>
                {{-- <p class="text-right">
                    <p>{{ $customer_info->recipient_name }}</p>
                    <p>{{ $customer_info->recipient_phone }}</p>
                        {{ $customer_info->delivery_address }}
                </p> --}}
            </div>
        </div>  
        <hr style="color:#000">
        {{-- <div>
            <p style="margin-left: 10px">Invoice Date :
                {{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $customer_info->order_date)->format('d-m-Y')}}
            </p>
        </div> --}}
        <div style="margin-right: 10px;margin-top:50px">
            <table style="border-top: 1px solid black; border-bottom: 1px solid black; width: 100%; border-collapse:collapse; margin-left: 10px; margin-right: 10px;">
                <thead>
                    <tr>
                        <th style="border-bottom: 1px solid black; text-align: center;">#</th>
                        <th style="border-bottom: 1px solid black; text-align: center;">Description</th>
                        <th style="border-bottom: 1px solid black; text-align: center;">Size</th>
                        <th style="border-bottom: 1px solid black; text-align: center;">Quantity</th>
                        <th style="border-bottom: 1px solid black; text-align: center;">Unit Price</th>
                        <th style="border-bottom: 1px solid black; text-align: center;">Amount (MMK)</th>
                      </tr>
                  </thead>
                  <tbody>
                        @php $i = 1; @endphp
                        @foreach ($order_info as $info)
                        @foreach ($info->order as $ord)
                        @foreach ($ord->product as $prod)
                            
                            <tr>
                                <td style="text-align: center;">{{ $i++ }}</td>
                                <td style="text-align: center;">{{ $prod->product_name }}</td>
                                <td style="text-align: center;">{{ $ord->size }}</td>
                                <td style="text-align: center;"> x 1</td>
                                <td style="text-align: center;">{{ number_format($prod->price) }}</td>
                                <td style="text-align: center;">{{ number_format($prod->price) }}</td>
                            </tr>
                        @endforeach
                        @endforeach
                        @endforeach

                  </tbody>
            </table>
        </div>
        <div style="width: 100%; font-size:13px; text-align: right;">
            <p class="text-right mb-2" style="margin-right:10px;">Sub - Total amount: {{ number_format($total_price) }}</p>

            <h4 class="text-right mb-5" style="margin-right:10px;">Total : {{ number_format($total_price) }} (MMK)</h4>
        </div>
        <div style="margin-top:350px">
            <footer>
                {{--  <p style="text-align:center;color:#1620a8">Thank you for your purchase!</p>
                <p style="text-align:center;color:#1620a8">For more information and inquiries please contact noreplacementsfound.online@gmail.com</p>  --}}
            </footer>
        </div>
    </span>
</div>

<script>
    var invoicePdfBtn = document.getElementById('invoicePdfBtn');
    var invoicePdf = document.getElementById('invoicePdf');

    //invoiceToPdf
    invoicePdfBtn.addEventListener("click", function () {
        html2pdf(invoicePdf);
    });
</script>

@endsection
