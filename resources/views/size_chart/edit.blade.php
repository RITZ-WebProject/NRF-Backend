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
                  <h4 class="card-title">Size Chart Edit</h4>
                  {{-- <button class="btn btn-dark">Back</button> --}}
                  {{-- <p class="card-description">
                    Basic form layout
                  </p> --}}
                  <form action="{{ route('size_charts.update', $size_chart->id) }}" method="POST" class="forms-sample" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for=""> Size Chart (Symbol) </label>
                                <input type="text" class="form-control" name="size_chart" value="{{$size_chart->size_chart}}" id="" placeholder="Example: Red" required>
                                <div class="text-danger form-control-feedback">
                                    {{$errors->first('size_chart')}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for=""> Size Chart (Long Term) </label>
                                <input type="text" class="form-control" name="size_chart_long" value="{{$size_chart->size_chart_long}}" id="" placeholder="Color Name (MM)">
                                <div class="text-danger form-control-feedback">
                                    {{$errors->first('size_chart_long')}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Save</button>
                    <a href="{{url('/size_charts')}}" class="btn btn-light">Cancel</a>
                  </form>
                </div>
              </div>
        </div>
    </div>

@endsection
