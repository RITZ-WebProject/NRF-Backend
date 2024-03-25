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
                  <h4 class="card-title">Customer Create</h4>
                  {{-- <button class="btn btn-dark">Back</button> --}}
                  {{-- <p class="card-description">
                    Basic form layout
                  </p> --}}
                  <form action="{{ route('customers.store') }}" method="POST" class="forms-sample" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Customer Name</label>
                                <input type="text" class="form-control" name="customer_name" id="" placeholder="Customer Name" required>
                                <div class="text-danger form-control-feedback">
                                    {{$errors->first('customer_name')}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Primary Phone</label>
                                <input type="text" class="form-control" name="phone_primary" id="" placeholder="Example: 09123456789" required>
                                <div class="text-danger form-control-feedback">
                                    {{$errors->first('phone_primary')}}
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Secondary Phone</label>
                                <input type="text" class="form-control" name="phone_secondary" id="" placeholder="Example: 09123456789">
                                <div class="text-danger form-control-feedback">
                                    {{$errors->first('phone_secondary')}}
                                </div>
                            </div>
                        </div> --}}
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" class="form-control" name="email" value="" id="">
                                <div class="text-danger form-control-feedback">
                                    {{$errors->first('email')}}
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">State/Division</label>
                                <select class="form-select bg-dark text-light" name="division_id" id="division_id" aria-label="Default select example" required>
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
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">District</label>
                                <select class="form-select bg-dark text-light" name="district_id" id="district_id" aria-label="Default select example" required>
                                    <option></option>
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
                                    <option></option>
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
                                <label for="">Home No: </label>
                                <input type="text" class="form-control" name="home_no" id="home_no" placeholder="No(1) " required value="{{ old('home_no') }}">
                                <div class="text-danger form-control-feedback">
                                    {{$errors->first('home_no')}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Street Name </label>
                                <input type="text" class="form-control" name="street_name" id="street_name" placeholder="Mayangone Street " required value="{{ old('street_name') }}">
                                <div class="text-danger form-control-feedback">
                                    {{$errors->first('street_name')}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Address </label>
                                <textarea name="address" id="address" readonly  class="form-control bg-dark" placeholder="No(1), 18th Street, Latha Township, Yangon" required>{{ old('address') }}</textarea>
                                <div class="text-danger form-control-feedback">
                                    {{$errors->first('address')}}
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <button type="submit" class="btn btn-primary me-2">Save</button>
                    <a href="{{url('customers/')}}" class="btn btn-light">Cancel</a>
                  </form>
                </div>
              </div>
        </div>
    </div>

@endsection
