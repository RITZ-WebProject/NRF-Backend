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
                  <h4 class="card-title">Job Create</h4>
                  <form action="{{ route('careers.store') }}" method="POST" class="forms-sample" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Job Title </label>
                                <input type="text" class="form-control" name="title" id="" placeholder="Job Title" required>
                                <div class="text-danger form-control-feedback">
                                    {{$errors->first('title')}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Job Descriptions</label>
                                <textarea class="form-control" name="description" id="" placeholder="Job Description" required></textarea>
                                    <div class="text-danger form-control-feedback">
                                        {{$errors->first('description')}}
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Job Requirements </label>
                                <textarea class="form-control" name="requirements" id="" placeholder="Job Requirements" required></textarea>
                                    <div class="text-danger form-control-feedback">
                                        {{$errors->first('requirements')}}
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" class="form-control" name="email" id="" placeholder="CV Receive Email" required>
                                <div class="text-danger form-control-feedback">
                                    {{$errors->first('email')}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Save</button>
                    <a href="{{url('careers/')}}" class="btn btn-light">Cancel</a>
                  </form>
                </div>
              </div>
        </div>
    </div>

@endsection
