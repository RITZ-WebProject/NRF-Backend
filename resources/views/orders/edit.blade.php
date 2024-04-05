@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                  <h4 class="card-title text-uppercase">Order Edit</h4>
                  {{-- <button class="btn btn-dark">Back</button> --}}
                  {{-- <p class="card-description">
                    Basic form layout
                  </p> --}}
                  <form action="{{ route('orders.update', $order->id) }}" method="POST" class="forms-sample" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for=""> Category Name </label>
                                <select class="form-select bg-dark text-white" name="category_id" id="category_id" aria-label="Default select example" required>
                                    <option disabled selected> Select Category </option>
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" @if ($order->category_id == $category->id)
                                        selected = "selected"
                                    @endif> {{ $category->name }} </option>
                                    @endforeach
                                </select>
                                <div class="text-danger form-control-feedback">
                                    {{$errors->first('category_id')}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for=""> Product Name </label>
                                <select class="form-select bg-dark text-white" name="product_id" id="product" aria-label="Default select example" required>
                                    <option disabled selected> Choose Product </option>
                                    @foreach ($products as $product)
                                    <option value="{{ $product->id }}" @if ($order->product_id == $product->id)
                                        selected = "selected"
                                    @endif> {{ $product->product_name }} </option>
                                    @endforeach

                                    {{-- @foreach ($categories as $category)
                                    <option value="{{$category->id}}" @if ($product->category_id == $category->id) selected = "selected" @endif>
                                        {{ $category->name }}
                                    </option>
                                @endforeach --}}
                                </select>
                                <div class="text-danger form-control-feedback">
                                    {{$errors->first('product_id')}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for=""> Original Price </label>
                                <input type="text" class="form-control" name="original_price" value="{{$order->original_price}}" id="price" placeholder="Original Price" required>
                                <div class="text-danger form-control-feedback">
                                    {{$errors->first('original_price')}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for=""> Discount %</label>
                                <input type="text" class="form-control" name="on_discount" value="{{$order->on_discount}}" id="discount" placeholder="Discount">
                                <div class="text-danger form-control-feedback">
                                    {{$errors->first('on_discount')}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for=""> Discount Price </label>
                                <input type="number" class="form-control" name="discount_price" value="{{$order->discount_price}}" id="discount_price" placeholder="Discount Price">
                                <div class="text-danger form-control-feedback">
                                    {{$errors->first('discount_price')}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for=""> Quantity </label>
                                <input type="number" class="form-control" name="quantity" value="{{$order->quantity}}" id="quantity" placeholder="Quantity" required>
                                <div class="text-danger form-control-feedback">
                                    {{$errors->first('quantity')}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for=""> Total Price </label>
                                <input type="number" class="form-control" name="total_price" value="{{$order->total_price}}" id="total_price" placeholder="Total Price" required>
                                <div class="text-danger form-control-feedback">
                                    {{$errors->first('total_price')}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for=""> Status </label>
                                <select class="form-select bg-dark text-white" name="status" value="{{$order->status}}" aria-label="Default select example" required>
                                    <option disabled selected> Choose Status </option>
                                    <option value="pending" @if ($order->status == 'pending') selected="selected" @endif>Pending</option>
                                    <option value="delivered" @if ($order->status == 'delivered') selected="selected" @endif>Delivered</option>
                                </select>
                                <div class="text-danger form-control-feedback">
                                    {{$errors->first('status')}}
                                </div>
                            </div>
                        </div>
                        {{--  <div class="col-md-3">
                            <div class="form-group">
                                <label for=""> Order Date </label>
                                <input type="datetime-local" class="form-control" name="order_date" value="{{$order_date}}" placeholder="Customer Name" required>
                                <div class="text-danger form-control-feedback">
                                    {{$errors->first('order_date')}}
                                </div>
                            </div>
                        </div>  --}}
                    </div>
                    <hr>
                    <div class="row mb-2">
                        <h6>DELIVERY INFO</h6>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for=""> Customer Name </label>
                                <select class="form-select bg-dark text-white" name="customer_id" id="" aria-label="Default select example" required>
                                    <option disabled selected> Choose Customer Name </option>
                                        @foreach ($customers as $customer)
                                        <option value="{{ $customer->id }}" @if ($order->customer_id == $customer->id)
                                            selected = "selected"
                                        @endif> {{ $customer->customer_name }} </option>
                                        @endforeach
                                </select>
                                <div class="text-danger form-control-feedback">
                                    {{$errors->first('customer_id')}}
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">State/Division</label>
                                <select class="form-select bg-dark text-light" name="division_id" id="division_id" aria-label="Default select example" required>
                                    <option disabled selected> Select Division </option>
                                        @foreach($divisions as $division)
                                            <option value="{{$division->id}}" @if($delivery_info->division_id == $division->id) selected @endif >{{$division->division_name}}</option>
                                        @endforeach
                                </select>
                                <div class="text-danger form-control-feedback">
                                    {{$errors->first('division_id')}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">District</label>
                                <select class="form-select bg-dark text-light" name="district_id" id="district_id" aria-label="Default select example" required>
                                    @foreach($districts as $district)
                                        <option value="{{$district->id}}" @if($delivery_info->district_id == $district->id) selected @endif >{{ $district->district_name }} </option>
                                    @endforeach
                                </select>
                                <div class="text-danger form-control-feedback">
                                    {{$errors->first('district_id')}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Township</label>
                                <select class="form-select bg-dark text-light" name="township_id" id="township_id" aria-label="Default select example" required>
                                    @foreach($townships as $township)
                                        <option value="{{$township->id}}" @if($delivery_info->township_id == $township->id) selected @endif > {{$township->township_name}}</option>
                                    @endforeach
                                </select>
                                <div class="text-danger form-control-feedback">
                                    {{$errors->first('township_id')}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Delivery Address </label>
                                <textarea name="address" id="address" class="form-control bg-dark">{{$delivery_info->delivery_address}}</textarea>
                                <div class="text-danger form-control-feedback">
                                    {{$errors->first('address')}}
                                </div>
                            </div>
                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary me-2">Save</button>
                    <a href="{{url('orders/')}}" class="btn btn-light">Cancel</a>
                  </form>
                </div>
              </div>
        </div>
    </div>

@endsection
