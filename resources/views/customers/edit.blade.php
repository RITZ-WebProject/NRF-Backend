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
                                <label for="">Email</label>
                                <input type="text" class="form-control" name="email" value="{{$customer->email}}" id="" required>
                                <div class="text-danger form-control-feedback">
                                    {{$errors->first('phone_primary')}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">New Password</label>
                                <input type="password" class="form-control" name="password" placeholder="New Password" id="" required>
                                <div class="text-danger form-control-feedback">
                                    {{$errors->first('password')}}
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
