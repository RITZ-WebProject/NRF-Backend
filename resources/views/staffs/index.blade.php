@extends('layouts.app')
@section('content')

@if (session("info"))
        <div class="alert alert-info">
            {{session("info")}}
        </div>
    @endif
<div class="card">
    <div class="card-body">
        <div class="row">
            <h4 class="card-title d-inline mt-2">STAFF LIST
                <button type="button" class="btn btn-primary btn-sm mb-2 float-end" data-bs-toggle="modal" data-bs-target="#create-staff-modal"> <i class="fas fa-plus"></i> ADD</button>
            </h4>
        </div>
      <div class="row">
        <div class="col-12">
          <div class="table-responsive">
            <table id="order-listing" class="table">
              <thead>
                <tr>
                    <th>No</th>
                    <th style="text-align: center">User Name</th>
                    <th style="text-align: center">User's Role</th>
                    <th class="text-center">Action</th>
                </tr>
              </thead>
              <tbody>
                    @php $i = 1; @endphp
                    @foreach ($staffs as $staff)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td style="text-align: center">{{ $staff->username }}</td>
                        <td style="text-align:center">
                            @if ($staff->user_roles == 'admin')
                                <label class="badge badge-success">{{ $staff->user_roles }}</label>
                            @else
                                <label class="badge badge-info">{{ $staff->user_roles }}</label>
                            @endif

                        </td>
                        <td class="text-center">
                          <a href="#">
                            <button class="btn btn-outline-warning pt-1 pb-1" data-bs-toggle="modal" data-bs-target="#editStaffModal{{$staff->id}}"> <i class="ti-pencil-alt"></i> </button>
                          </a>
                            <form action="{{ url('staffs/delete',['id'=>$staff->id]) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure want to delete?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" id="PopoverCustomT-1" class="btn btn-outline-danger pt-1 pb-1"><i class="ti-trash"> </i></button>
                            </form>
                        </td>
                    </tr>

                    {{-- edit staff modal --}}
                    <div class="modal fade" id="editStaffModal{{$staff->id}}" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="ModalLabel">Staff Edit</h5>
                            <a href="{{ url('staffs/') }}" class="btn"><i class="ti-close" style="font-size: 10px"></i></a>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('staffs.update', $staff->id) }}" method="POST" class="forms-sample" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="recipient-name">User Name</label>
                                        <input type="text" class="form-control" name="username" value="{{ $staff->username }}" id="" placeholder="Username" required>
                                        <div class="text-danger form-control-feedback">
                                            {{$errors->first('username')}}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text">Password</label>
                                        <input type="text" class="form-control" name="password" id="">
                                        <div class="text-danger form-control-feedback">
                                            {{$errors->first('password')}}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text">User's Role</label>
                                        <select class="form-select" name="user_roles" value="{{ $staff->user_roles }}" aria-label="Default select example" required>
                                            <option disabled selected>Select Role</option>
                                            <option value="admin" @if ($staff->user_roles == 'admin') selected="selected" @endif>Admin</option>
                                            <option value="staff" @if ($staff->user_roles == 'staff') selected="selected" @endif>Staff</option>
                                          </select>
                                        <div class="text-danger form-control-feedback">
                                            {{$errors->first('user_roles')}}
                                        </div>
                                    </div>
                            </div>
                            <div class="modal-footer">
                            <button type="submit" class="btn btn-success">SAVE</button>
                            </form>
                            <a href="{{url('staffs/')}}" class="btn btn-light">CANCEL</a>
                            </div>
                        </div>
                        </div>
                    </div>

                    @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- create staff modal --}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
  <div class="modal fade" id="create-staff-modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ModalLabel">Staff Create</h5>
          {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
          </button> --}}
          <a href="{{ url('staffs/') }}" class="btn"><i class="ti-close" style="font-size: 10px"></i></a>
        </div>
        <div class="modal-body">
            <form action="{{ route('staffs.store') }}" method="POST" class="forms-sample" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="recipient-name">User Name</label>
                    <input type="text" class="form-control" name="username" id="" placeholder="Username" required>
                    <div class="text-danger form-control-feedback">
                        {{$errors->first('username')}}
                    </div>
                </div>
                <div class="form-group">
                    <label for="message-text">Password</label>
                    <input type="text" class="form-control" name="password" id="" placeholder="asd123!@#" required>
                    <div class="text-danger form-control-feedback">
                        {{$errors->first('password')}}
                    </div>
                </div>
                <div class="form-group">
                    <label for="message-text">User's Role</label>
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
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">SAVE</button>
        </form>
        <a href="{{url('staffs/')}}" class="btn btn-light">CANCEL</a>
        </div>
      </div>
    </div>
  </div>

@endsection
