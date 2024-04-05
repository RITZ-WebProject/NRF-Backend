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
                  <h4 class="card-title">Product Create</h4>
                  <form action="{{ route('products.store') }}" method="POST" class="forms-sample" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for=""> Categories </label>
                                <select class="form-select bg-dark text-light" name="category_id" aria-label="Default select example" required>
                                    <option disabled selected> Choose Categories </option>
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"> {{ $category->name }} </option>
                                    @endforeach
                                </select>
                                <div class="text-danger form-control-feedback">
                                    {{$errors->first('category_id')}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for=""> Product Name </label>
                                <input type="text" class="form-control" name="product_name" id="" placeholder="Product Name" required>
                                <div class="text-danger form-control-feedback">
                                    {{$errors->first('name')}}
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for=""> Description </label>
                                <input type="text" class="form-control" name="description" id="" placeholder="Description" required>
                                <div class="text-danger form-control-feedback">
                                    {{$errors->first('description')}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for=""> Price (MMK)</label>
                                <input type="text" class="form-control" name="price" id="" placeholder="Price(MMK)" required>
                                <div class="text-danger form-control-feedback">
                                    {{$errors->first('price')}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for=""> Price ($)</label>
                                <input type="text" class="form-control" name="dollor" id="" placeholder="Price($)" required>
                                <div class="text-danger form-control-feedback">
                                    {{$errors->first('dollor')}}
                                </div>
                            </div>
                        </div>

						<div class="row">
                           <div class="col-md-6">
                                <div class="form-group">
                                    <label for=""> Sizes </label>
                                    <select class="form-select bg-dark text-light" name="size_type" id="determiner" aria-label="Default select example" required>
                                        <option disabled selected> Choose Categories </option>
                                        <option value="no">No Size</option>
                                        <option value="free">Free Size</option>
                                        <option value="normal">Normal</option>
                                    </select>
                                    <div class="text-danger form-control-feedback">
                                        {{$errors->first('size_type')}}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row" id="one_size" style="display:none">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Quantity </label>
                                    <input type="number" class="form-control" name="one_quantity" placeholder="Small Quantity" min="0" value="0" required>
                                    <div class="text-danger form-control-feedback">
                                        {{$errors->first('small_quantity')}}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row" id="normal_sizes" style="display:none">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Small Quantity </label>
                                    <input type="number" class="form-control" name="small_quantity" id="" placeholder="Small Quantity" min="0" value="0" required>
                                    <div class="text-danger form-control-feedback">
                                        {{$errors->first('small_quantity')}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Medium Quantity </label>
                                    <input type="number" class="form-control" name="medium_quantity" id="" placeholder="Medium Quantity" min="0" value="0" required>
                                    <div class="text-danger form-control-feedback">
                                        {{$errors->first('medium_quantity')}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Large Quantity </label>
                                    <input type="number" class="form-control" name="large_quantity" id="" placeholder="Large Quantity" min="0" value="0" required>
                                    <div class="text-danger form-control-feedback">
                                        {{$errors->first('large_quantity')}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Extra Large (XL) Quantity </label>
                                    <input type="number" class="form-control" name="xlarge_quantity" id="" placeholder="XLarge Quantity" min="0" value="0" required>
                                    <div class="text-danger form-control-feedback">
                                        {{$errors->first('xlarge_quantity')}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Extra Extra Large (XXL) Quantity </label>
                                    <input type="number" class="form-control" name="xxlarge_quantity" id="" placeholder="XXLarge Quantity" min="0" value="0" required>
                                    <div class="text-danger form-control-feedback">
                                        {{$errors->first('xxlarge_quantity')}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Extra Extra Extra Large (XXXL)</label>
                                    <input type="number" class="form-control" name="xxxlarge_quantity" id="" placeholder="XXXLarge Quantity" min="0" value="0" required>
                                    <div class="text-danger form-control-feedback">
                                        {{$errors->first('xxxlarge_quantity')}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for=""> Photo </label>
                                <input type="file" class="form-control text-dark" name="photo[]" id="" placeholder="" multiple required>
                                <div class="text-danger form-control-feedback">
                                	@error('photo')
                                		{{ $message }}
                                	@enderror
                                </div>
                            </div>
                        </div>
						<div class="col-md-3">
    						<div class="form-group">
        					<label for="visable_time">Launch Time</label>
							<input type="datetime-local" class="form-control" name="visable_time" id="visable_time" required>
							<div class="text-danger form-control-feedback">
								{{ $errors->first('visable_time') }}
							</div>
							</div>
						</div>
						<div class="col-md-3">
                                <div class="form-group">
                                    <label for=""> Status </label>
                                    <select class="form-select bg-dark text-white" name="status"
                                        aria-label="Default select example" required>
                                        <option disabled selected> Select Status </option>
                                        <option value="active">Active</option>
                                        <option value="unactive">Unactive</option>
                                    </select>
                                    <div class="text-danger form-control-feedback">
                                        {{ $errors->first('status') }}
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

@section('script')
let select = document.getElementById('determiner');
let normal = document.getElementById('normal_sizes');
let one = document.getElementById('one_size');

function logValue() {
    switch (this.value) {
        case 'no':
            one.style.display = "block";
            normal.style.display = "none";
            break;
        case 'free':
            one.style.display = "block";
            normal.style.display = "none";
            break;
        case 'normal':
            normal.style.display = "flex";
            one.style.display = "none";
            break;
    }
}

select.addEventListener('change', logValue, false);


@endsection
