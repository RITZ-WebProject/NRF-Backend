@extends('layouts.app')
@section('content')

    <table id="cart" class="table table-condensed">
        <thead>
            <th style="width: 50%">Product</th>
            <th style="width: 10%">Price</th>
            <th style="width: 10%">Discount (%)</th>
            <th style="width: 10%">Quantity</th>
            <th style="width: 22%">Subtotal</th>
            <th style="width: 10%">Action</th>
        </thead>
        <tbody>
            @php $total = 0  @endphp
            @if (session('cart'))
                @foreach (session('cart') as $id => $details)
                    @php
                        $total += $details['price'] * $details['quantity'] * (1 - $details['discount_id']/100)
                    @endphp
                    <tr data-id="{{$id}}">
                        <td data-th="Product">
                            <div class="row">
                                <div class="col-sm-3 hidden-xs">
                                    <img src="{{ asset('storage/app/public/product_photos/'.$details['photo']) }}" alt="" class="rounded" style="width: 70px; height: 70px">
                                </div>
                                <div class="col-sm-9 d-flxex align-items-center font-weight-bold" style="font-size: 16px">
                                    {{$details['id']}} <br> <br>
                                    {{$details['product_name']}}
                                </div>
                            </div>

                        </td>
                        <td data-th="Price">{{$details['price']}}</td>
                        <td data-th="Discount">{{ $details['discount_id'] == null? 0 : $details['discount_id'] }} % </td>
                        <td data-th="Quantity">
                            <input type="number" value="{{$details['quantity']}}" class="form-control quantity cart_update" min="1" >
                        </td>
                        <td data-th="Subtotal">{{ $details['price'] * $details['quantity'] * (1 - $details['discount_id']/100) }} MMK</td>
                        <td>
                            <button class="btn btn-danger btn-sm cart_remove"><i class="ti-trash"></i> Delete </button>
                        </td>
                    </tr>

                @endforeach
            @endif
        </tbody>
        <tfoot>
            <tr>
                <td colspan="6" class="text-right">
                    <h4><strong>Total {{ $total }} MMK</strong></h4>
                </td>
            </tr>
            <tr>
                <td colspan="6" class="text-right">
                    <a href="{{ url('/products') }}" class="btn btn-danger btn-sm">Continue Shopping</a>
                    <a href="{{ url('/checkout') }}"><button class="btn btn-success btn btn-sm">Checkout </button></a>
                </td>
            </tr>
        </tfoot>
    </table>

@endsection
