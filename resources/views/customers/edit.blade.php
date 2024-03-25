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
                  <h4 class="card-title">Customer Edit</h4>
                  {{-- <button class="btn btn-dark">Back</button> --}}
                  {{-- <p class="card-description">
                    Basic form layout
                  </p> --}}
                  <form action="{{ route('customers.update', $customer->id) }}" method="POST" class="forms-sample" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Customer Name</label>
                                <input type="text" class="form-control" name="customer_name" value="{{$customer->customer_name}}" id="" required>
                                <div class="text-danger form-control-feedback">
                                    {{$errors->first('customer_name')}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Primary Phone</label>
                                <input type="text" class="form-control" name="phone_primary" value="{{$customer->phone_primary}}" id="" required>
                                <div class="text-danger form-control-feedback">
                                    {{$errors->first('phone_primary')}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Secondary Phone</label>
                                <input type="text" class="form-control" name="phone_secondary" value="{{$customer->phone_secondary}}" id="">
                                <div class="text-danger form-control-feedback">
                                    {{$errors->first('phone_secondary')}}
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">State/Division</label>
                                <select class="form-select bg-dark text-light" name="division_id" id="division_id" aria-label="Default select example" required>
                                    <option disabled selected> Select Division </option>
                                        @foreach($divisions as $division)
                                            <option value="{{$division->id}}" @if($customer->division_id == $division->id) selected @endif >{{$division->division_name}}</option>
                                        @endforeach
                                </select>
                                <div class="text-danger form-control-feedback">
                                    {{$errors->first('division_id')}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">District</label>
                                <select class="form-select bg-dark text-light" name="district_id" id="district_id" aria-label="Default select example" required>
                                    @foreach($districts as $district)
                                        <option value="{{$district->id}}" @if($customer->district_id == $district->id) selected @endif >{{ $district->district_name }} </option>
                                    @endforeach
                                </select>
                                <div class="text-danger form-control-feedback">
                                    {{$errors->first('district_id')}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Township</label>
                                <select class="form-select bg-dark text-light" name="township_id" id="township_id" aria-label="Default select example" required>
                                    @foreach($townships as $township)
                                        <option value="{{$township->id}}" @if($customer->township_id == $township->id) selected @endif > {{$township->township_name}}</option>
                                    @endforeach
                                </select>
                                <div class="text-danger form-control-feedback">
                                    {{$errors->first('township_id')}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Address </label>
                                <textarea name="address" id="address" class="form-control bg-dark">{{$customer->address}}</textarea>
                                <div class="text-danger form-control-feedback">
                                    {{$errors->first('address')}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Save</button>
                    <a href="{{url('customers/')}}" class="btn btn-light">Cancel</a>
                  </form>
                </div>
              </div>
        </div>
    </div>

@endsection
