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
                  <h4 class="card-title text-uppercase">Delivery Information</h4>
                  {{-- <button class="btn btn-dark">Back</button> --}}
                  {{-- <p class="card-description">
                    Basic form layout
                  </p> --}}
                  <form action="{{ route('testCheckOut') }}" method="POST" class="forms-sample" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for=""> Customer Name </label>
                                        <select class="form-select bg-dark text-white customer_select" name="customer_id" id="customer_id" aria-label="Default select example">
                                            <option disabled selected> Select Customer Name </option>
                                            <option value="">Others</option>
                                            @foreach ($customers as $customer)
                                                <option value="{{ $customer->id }}"> {{ $customer->customer_name }} </option>
                                            @endforeach
                                        </select>

                                        <div class="text-danger form-control-feedback">
                                            {{$errors->first('customer_id')}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group customer_name">
                                        <label for="">New Customer Name </label>
                                        <input type="text" class="form-control" name="customer_name" id="" placeholder="New Customer Name">
                                        <div class="text-danger form-control-feedback">
                                            {{$errors->first('customer_name')}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group phone_primary">
                                        <label for="">Primary Phone </label>
                                        <input type="text" class="form-control" name="phone_primary" id="phone_primary" placeholder="Example: 09123456789">
                                        <div class="text-danger form-control-feedback">
                                            {{$errors->first('phone_primary')}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group phone_primary">
                                        <label for="">Secondary Phone </label>
                                        <input type="text" class="form-control" name="phone_secondary" id="phone_secondary" placeholder="">
                                        <div class="text-danger form-control-feedback">
                                            {{$errors->first('phone_secondary')}}
                                        </div>
                                    </div>
                                </div>
                                {{-- /////////////////////////// --}}
                                {{-- <div class="col-md-12">
                                    <div class="form-group old_division">
                                        <label for="">State/Division </label>
                                        <input type="text" class="form-control" name="division_id" id="division_id" placeholder="">
                                        <div class="text-danger form-control-feedback">
                                            {{$errors->first('')}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group old_district">
                                        <label for="">District </label>
                                        <input type="text" class="form-control" name="district_id" id="district_id" placeholder="">
                                        <div class="text-danger form-control-feedback">
                                            {{$errors->first('')}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group old_township">
                                        <label for="">Township </label>
                                        <input type="text" class="form-control" name="township_id" id="township_id" placeholder="">
                                        <div class="text-danger form-control-feedback">
                                            {{$errors->first('')}}
                                        </div>
                                    </div>
                                </div> --}}
                                {{-- /////////////////////////// --}}
                                <div class="col-md-12">
                                    <div class="form-group division">
                                        <label for="">State/Division</label>
                                            <select class="form-select bg-dark text-white" name="division_id" id="division_id" aria-label="Default select example">
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
                                <div class="col-md-12">
                                    <div class="form-group district">
                                        <label for="">District</label>
                                        <select class="form-select bg-dark text-light" name="district_id" id="district_id" aria-label="Default select example">
                                            <option></option>
                                        </select>
                                        <div class="text-danger form-control-feedback">
                                            {{$errors->first('district_id')}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group township">
                                        <label for="">Township</label>
                                        <select class="form-select bg-dark text-light" name="township_id" id="township_id" aria-label="Default select example">
                                            <option></option>
                                        </select>
                                        <div class="text-danger form-control-feedback">
                                            {{$errors->first('township_id')}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group home_no">
                                        <label for="">Home No: </label>
                                        <input type="text" class="form-control" name="home_no" id="home_no" placeholder="No(1) " value="{{ old('home_no') }}">
                                        <div class="text-danger form-control-feedback">
                                            {{$errors->first('home_no')}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group street">
                                        <label for="">Street Name </label>
                                        <input type="text" class="form-control" name="street_name" id="street_name" placeholder="Mayangone Street " value="{{ old('street_name') }}">
                                        <div class="text-danger form-control-feedback">
                                            {{$errors->first('street_name')}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group address">
                                        <label for="">Delivery Address </label>
                                        <textarea name="address" id="address"  class="form-control bg-dark" placeholder="No(1), 18th Street, Latha Township, Yangon">{{ old('address') }}</textarea>
                                        <div class="text-danger form-control-feedback">
                                            {{$errors->first('address')}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                {{-- <div class="col-md-6"> --}}

                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Your Order</h4>
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th class="pt-1 ps-0">Item</th>
                                                            <th class="pt-1">Price</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @php $total = 0  @endphp
                                                        @if (session('cart'))
                                                            @foreach (session('cart') as $id => $details)
                                                                @php
                                                                    $total += $details['price'] * $details['quantity'] * (1 - $details['discount_id']/100)
                                                                @endphp
                                                                <tr>
                                                                    <td>{{$details['product_name']}}</td>
                                                                    <td>{{$details['price'] * $details['quantity'] * (1 - $details['discount_id']/100)}} MMK</td>
                                                                </tr>
                                                            @endforeach
                                                        @endif
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <td class="text-right">
                                                                <h4><strong>Total  MMK</strong></h4>
                                                            </td>
                                                            <td> {{ $total }} MMK</td>
                                                        </tr>
                                                        {{-- <tr>
                                                            <td class="text-right">
                                                                <a href=""><button class="btn btn-primary btn btn-sm"><i class=""></i> PLACE ORDER </button></a>
                                                            </td>
                                                        </tr> --}}
                                                    </tfoot>
                                                </table>

                                                <a href=""><button class="btn btn-primary btn btn-sm mt-3"><i class=""></i> PLACE ORDER </button></a>
                                            </div>
                                        </div>
                                    </div>

                                {{-- </div> --}}
                            </div>
                        </div>
                    </div>



                    {{-- <button type="submit" class="btn btn-primary me-2">Save</button>
                    <a href="{{url('orders/')}}" class="btn btn-light">Cancel</a> --}}
                  </form>
                </div>
              </div>
        </div>
    </div>

@endsection
