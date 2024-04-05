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
                  <h4 class="card-title">Country Edit</h4>
                  <form action="{{ route('countries.update', $countries->id) }}" method="POST" class="forms-sample" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Country Name</label>
                                <input type="text" class="form-control" name="country" value="{{$countries->name}}" id="" required>
                                <div class="text-danger form-control-feedback">
                                    {{$errors->first('country')}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Code</label>
                                <input type="text" class="form-control" name="code" value="{{$countries->code}}" id="" required>
                                <div class="text-danger form-control-feedback">
                                    {{$errors->first('code')}}
                                </div>
                            </div>
                        </div>
                    <button type="submit" class="btn btn-primary me-2">Save</button>
                    <a href="{{url('countries/')}}" class="btn btn-light">Cancel</a>
                  </form>
                </div>
              </div>
        </div>
    </div>

@endsection
