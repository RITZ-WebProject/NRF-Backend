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
                  <h4 class="card-title text-uppercase">Order Create</h4>
                  {{-- <button class="btn btn-dark">Back</button> --}}
                  {{-- <p class="card-description">
                    Basic form layout
                  </p> --}}
                  <form action="{{ route('orders.store') }}" method="POST" class="forms-sample" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for=""> Category Name </label>
                                <select class="form-select bg-dark text-white" name="category_id" id="category_id" aria-label="Default select example" required>
                                    <option disabled selected> Select Category </option>
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"> {{ $category->name }} </option>
                                    @endforeach
                                </select>
                                <div class="text-danger form-control-feedback">
                                    {{$errors->first('product_id')}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for=""> Product Name </label>
                                <select class="form-select bg-dark text-white" name="product_id" id="product" aria-label="Default select example" required>
                                    <option disabled selected> Select Product </option>
                                    {{-- @foreach ($products as $product)
                                    <option value="{{ $product->id }}"> {{ $product->product_name }} </option>
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
                                <input type="text" class="form-control" name="original_price" id="price" placeholder="Original Price" required>
                                <div class="text-danger form-control-feedback">
                                    {{$errors->first('original_price')}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for=""> Discount %</label>
                                <input type="text" class="form-control" name="on_discount" id="discount" placeholder="Discount">
                                <div class="text-danger form-control-feedback">
                                    {{$errors->first('on_discount')}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for=""> Discount Price </label>
                                <input type="number" class="form-control" name="discount_price" id="discount_price" placeholder="Discount Price" required>
                                <div class="text-danger form-control-feedback">
                                    {{$errors->first('discount_price')}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for=""> Quantity </label>
                                <input type="number" class="form-control" name="quantity" id="quantity" placeholder="Quantity" required>
                                <div class="text-danger form-control-feedback">
                                    {{$errors->first('quantity')}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for=""> Total Price </label>
                                <input type="number" class="form-control" name="total_price" id="total_price" placeholder="Total Price" required>
                                <div class="text-danger form-control-feedback">
                                    {{$errors->first('total_price')}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for=""> Status </label>
                                <select class="form-select bg-dark text-white" name="status" aria-label="Default select example" required>
                                    <option disabled selected> Select Status </option>
                                    <option value="pending">Pending</option>
                                    <option value="delivered">Delivered</option>
                                </select>
                                <div class="text-danger form-control-feedback">
                                    {{$errors->first('status')}}
                                </div>
                            </div>
                        </div>
                        {{--  <div class="col-md-3">
                            <div class="form-group">
                                <label for=""> Order Date </label>
                                <input type="date" class="form-control" name="order_date" placeholder="" required>
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

                                {{-- <input name="customer_name" id="customer_name" placeholder="For Example : Name"
                                value="{{ old('customer_name') }}" type="search" class="form-control"
                                required>
                                <input type="hidden" name="client_id" id="client_id_hidden" value="">
                                <div id="client_list">
                                </div> --}}
                                {{-- <input type="text" name="search_customerlist" class="form-control" value="{{ request()->get('search_customerlist') }}" placeholder="Search..."> --}}

                                <select class="form-select bg-dark text-white" name="customer_id" id="" aria-label="Default select example" required>
                                    <option disabled selected> Select Customer Name </option>
                                    @foreach ($customers as $customer)
                                    <option value="{{ $customer->id }}"> {{ $customer->customer_name }} </option>
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
                                <select class="form-select bg-dark text-light" name="division_id" id="division_id" aria-label="Default select example">
                                    <option disabled selected> Select Division </option>
                                    @foreach ($divisions as $division)
                                        <option value="{{ $division->id }}" {{(old("division_id")== $division->division_name ? "selected":"")}} >{{ $division->division_name }}</option>
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
                                <select class="form-select bg-dark text-light" name="district_id" id="district_id" aria-label="Default select example">
                                    <option></option>
                                </select>
                                <div class="text-danger form-control-feedback">
                                    {{$errors->first('district_id')}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Township</label>
                                <select class="form-select bg-dark text-light" name="township_id" id="township_id" aria-label="Default select example">
                                    <option></option>
                                </select>
                                <div class="text-danger form-control-feedback">
                                    {{$errors->first('township_id')}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Home No: </label>
                                <input type="text" class="form-control" name="home_no" id="home_no" placeholder="No(1) " value="{{ old('home_no') }}">
                                <div class="text-danger form-control-feedback">
                                    {{$errors->first('home_no')}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Street Name </label>
                                <input type="text" class="form-control" name="street_name" id="street_name" placeholder="Mayangone Street " value="{{ old('street_name') }}">
                                <div class="text-danger form-control-feedback">
                                    {{$errors->first('street_name')}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Delivery Address </label>
                                <textarea name="address" id="address" readonly  class="form-control bg-dark" placeholder="No(1), 18th Street, Latha Township, Yangon">{{ old('address') }}</textarea>
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
