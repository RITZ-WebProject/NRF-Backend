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
                  <h4 class="card-title">Discounts Edit</h4>
                  {{-- <button class="btn btn-dark">Back</button> --}}
                  {{-- <p class="card-description">
                    Basic form layout
                  </p> --}}
                  <form action="{{ route('discounts.update', $discounts->id) }}" method="POST" class="forms-sample" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for=""> Discount Name </label>
                                <input type="text" class="form-control" name="discount_name" value="{{$discounts->discount_name}}" id="" placeholder="Product ID" required>
                                <div class="text-danger form-control-feedback">
                                    {{$errors->first('product_id')}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for=""> Item Discount </label>
                                <input type="text" class="form-control" name="item_discount" value="{{$discounts->item_discount}}" id="" placeholder="Ex:10% discount" required>
                                <div class="text-danger form-control-feedback">
                                    {{$errors->first('item_discount')}}
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Apply Discount </label>
                                <br>
                                <select class="selectpicker" name="product_uniquekey" multiple data-live-search="true">
                                    @foreach ($products as $product)
                                        <option value="{{$product->product_uniquekey}}">{{$product->product_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div> --}}
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Save</button>
                    <a href="{{url('discounts/')}}" class="btn btn-light">Cancel</a>
                  </form>
                </div>
              </div>
        </div>
    </div>
@endsection
