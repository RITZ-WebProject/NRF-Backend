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
                  <h4 class="card-title">Staff Create</h4>
                  {{-- <button class="btn btn-dark">Back</button> --}}
                  {{-- <p class="card-description">
                    Basic form layout
                  </p> --}}
                  <form action="{{ route('staffs.store') }}" method="POST" class="forms-sample" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputUsername1">User Name</label>
                                <input type="text" class="form-control" name="username" id="" placeholder="Username" required>
                                <div class="text-danger form-control-feedback">
                                    {{$errors->first('username')}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="text" class="form-control" name="password" id="" placeholder="asd123!@#" required>
                                <div class="text-danger form-control-feedback">
                                    {{$errors->first('password')}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleSelectGender">User's Role</label>
                                  {{-- <select class="form-control" id="exampleSelectGender">
                                    <option value="">Select Role</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                  </select> --}}

                                  <select class="form-select" name="user_roles" aria-label="Default select example" required>
                                    <option disabled selected>Select Role</option>
                                    <option value="admin">Admin</option>
                                    <option value="staff">Staff</option>
                                  </select>
                                  <div class="text-danger form-control-feedback">
                                    {{$errors->first('user_roles')}}
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
                      <label for="exampleInputEmail1">Email Sress</label>
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
                    <a href="{{url('staffs/')}}" class="btn btn-light">Cancel</a>
                  </form>
                </div>
              </div>
        </div>
    </div>

@endsection
