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
                  <h4 class="card-title">Contact Edit</h4>
                  {{-- <button class="btn btn-dark">Back</button> --}}
                  {{-- <p class="card-description">
                    Basic form layout
                  </p> --}}
                  <form action="{{ route('contact.update', $contact->id) }}" method="POST" class="forms-sample" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputContent">Company_Name</label>
                                <input type="text" class="form-control" name="company_name" value="{{$contact->company_name}}" id="" placeholder="Company Name">
                                <div class="text-danger form-control-feedback">
                                    {{$errors->first('company_name')}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputContent">Address</label>
                                <input type="text" class="form-control" name="address" value="{{$contact->address}}" id="" placeholder="Address">
                                <div class="text-danger form-control-feedback">
                                    {{$errors->first('address')}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputPhoto">Phone Number</label>
                                <input type="tel" class="form-control" name="phone" value="{{$contact->phone}}" id="" placeholder="Phone">
                                <div class="text-danger form-control-feedback">
                                    {{$errors->first('phone')}}
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="form-group">
                      <label for="exampleInputUsername1">Username</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Username</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Confirm Password</label>
                      <input type="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password">
                    </div>
                    <div class="form-check form-check-flat form-check-primary">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input">
                        Remember me
                      </label>
                    </div> --}}
                    <button type="submit" class="btn btn-primary me-2">Save</button>
                    <a href="{{url('/about')}}" class="btn btn-light">Cancel</a>
                  </form>
                </div>
              </div>
        </div>
  

@endsection
