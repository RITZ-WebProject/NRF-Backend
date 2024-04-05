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
                  <h4 class="card-title">Product Edit</h4>
                  <form action="{{ route('products.update', $product->id) }}" method="POST" class="forms-sample" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for=""> Product Name </label>
                                <input type="text" class="form-control" name="product_name" value="{{$product->product_name}}" id="" placeholder="Product Name" required>
                                <div class="text-danger form-control-feedback">
                                    {{$errors->first('product_name')}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for=""> Categories </label>
                                <select class="form-select bg-dark text-light" name="category_id" aria-label="Default select example" required>
                                    <option disabled selected> Choose Categories </option>
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}" @if ($product->category_id == $category->id) selected = "selected" @endif>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                                <div class="text-danger form-control-feedback">
                                    {{$errors->first('category_id')}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for=""> Description </label>
                                <input type="text" class="form-control" name="description" value="{{$product->description}}" id="" placeholder="Description" required>
                                <div class="text-danger form-control-feedback">
                                    {{$errors->first('description')}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for=""> Price(MMK) </label>
                                <input type="text" class="form-control" name="price" value="{{$product->price}}" id="" placeholder="Price(MMK)" required>
                                <div class="text-danger form-control-feedback">
                                    {{$errors->first('price')}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for=""> Price($) </label>
                                <input type="text" class="form-control" name="dollor" value="{{$product->dollor}}" id="" placeholder="Price($)" required>
                                <div class="text-danger form-control-feedback">
                                    {{$errors->first('dollor')}}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                 <div class="form-group" style="display: flex">
                                     <h3> Sizes: </h3>
                                     <h3> &nbsp;{{ucfirst($product->size_type)}}</h3>

                                     <div class="text-danger form-control-feedback">
                                         {{$errors->first('size_type')}}
                                     </div>
                                 </div>
                             </div>
                        </div>
                        <div class="row">
                                @if($product->size_type === 'no' || $product->size_type === 'free')
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Quantity </label>
                                            <input type="number" class="form-control" name="one_quantity" placeholder="Small Quantity" min="0" value="{{$product->small_quantity}}" required>
                                        </div>
                                    </div>
                                @else
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Small Quantity </label>
                                            <input type="number" class="form-control" name="small_quantity" id="" placeholder="Small Quantity" min="0" value="{{$product->small_quantity}}" required>
                                            <div class="text-danger form-control-feedback">
                                                {{$errors->first('small_quantity')}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Medium Quantity </label>
                                            <input type="number" class="form-control" name="medium_quantity" id="" placeholder="Medium Quantity" min="0" value="{{$product->medium_quantity}}" required>
                                            <div class="text-danger form-control-feedback">
                                                {{$errors->first('medium_quantity')}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Large Quantity </label>
                                            <input type="number" class="form-control" name="large_quantity" id="" placeholder="Large Quantity" min="0" value="{{$product->large_quantity}}" required>
                                            <div class="text-danger form-control-feedback">
                                                {{$errors->first('large_quantity')}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Extra Large (XL) Quantity </label>
                                            <input type="number" class="form-control" name="xlarge_quantity" id="" placeholder="XLarge Quantity" min="0" value="{{$product->xlarge_quantity}}" required>
                                            <div class="text-danger form-control-feedback">
                                                {{$errors->first('xlarge_quantity')}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Extra Extra Large (XXL) Quantity </label>
                                            <input type="number" class="form-control" name="xxlarge_quantity" id="" placeholder="XXLarge Quantity" min="0" value="{{$product->xxlarge_quantity}}" required>
                                            <div class="text-danger form-control-feedback">
                                                {{$errors->first('xxlarge_quantity')}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Extra Extra Extra Large (XXXL) </label>
                                            <input type="number" class="form-control" name="xxxlarge_quantity" id="" placeholder="XXXLarge Quantity" min="0" value="{{$product->xxxlarge_quantity}}" required>
                                            <div class="text-danger form-control-feedback">
                                                {{$errors->first('xxxlarge_quantity')}}
                                            </div>
                                        </div>
                                    </div>
                                @endif
                        </div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="visable_time">Launch Time</label>
								<input type="datetime-local" class="form-control" name="visable_time" id="visable_time" value="{{$product->visable_time}}" required>
								<div class="text-danger form-control-feedback">
									{{ $errors->first('visable_time') }}
								</div>
							</div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Save</button>
                    <a href="{{url('products/')}}" class="btn btn-light">Cancel</a>
                  </form>
                </div>
              </div>
        </div>
    </div>
@endsection
