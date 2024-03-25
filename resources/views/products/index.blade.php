@extends('layouts.app')
@section('content')

    @if (session("info"))
        <div class="alert alert-secondary">
            {{session("info")}}
        </div>
    @endif
<div class="card">
    <div class="card-body">
      <div class="row">
        <h4 class="card-title d-inline mt-2">PRODUCT LIST
            <a href="{{ url('products/create') }}"><button class="btn btn-primary btn-sm mb-2 float-end"> <i class="fas fa-plus"></i> Add</button></a>
        </h4>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="table-responsive">
            <table id="order-listing" class="table">
              <thead>
                <tr>
                    <th>No</th>
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Categories</th>
                    <th>Description</th>
                    <th>Price(MMK)</th>
                    <th>Price($)</th>
					<th>Size Type</th>
                    {{-- <th>Color</th> --}}
                    <th class="text-center">Small <br> Quantity</th>
                    <th class="text-center">Medium <br> Quantity</th>
                    <th class="text-center">Large <br> Quantity</th>
                    <th class="text-center">XLarge <br> Quantity</th>
                    <th class="text-center">2XLarge <br> Quantity</th>
                    <th class="text-center">3XLarge <br> Quantity</th>
					<th>Update Status</th>
                    {{-- <th>Current Discount</th> --}}
                    <th class="text-center">Action</th>
                </tr>
              </thead>
              <tbody>
                    @php $i = 1; @endphp
                    @foreach ($products as $product)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>
                            {{-- <a href="{{route('add_to_cart', $product->id)}}" class="text-decoration-none badge badge-secondary rounded-circle"><i class="ti-plus text-light"></i>
                            </a> --}}
                            {{ $product->id }}
                        </td>
                        <td>
                          @php
                            $photoArray = explode("'x'", $product->photo);

                          @endphp
                            <img src="{{ asset('storage/app/public/product_photos/'.$photoArray[0]) }}" style="object-fit: cover" alt="" class="rounded">
                            {{ $product->product_name }}
                        </td>
                        <td>{{ $product->cat_name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ number_format($product->price) }}</td>
                        <td>{{ number_format($product->dollor) }}</td>
                        {{-- <td>{{ $product->color }}</td> --}}
						            <td>{{$product->size_type}}</td>
                        <td>{{ $product->small_quantity }}</td>
                        <td>{{ $product->medium_quantity }}</td>
                        <td>{{ $product->large_quantity }}</td>
                        <td>{{ $product->xlarge_quantity }}</td>
                        <td>{{ $product->xxlarge_quantity }}</td>
                        <td>{{ $product->xxxlarge_quantity }}</td>
						<td>
                            <form id="product-update-status" action="{{ route('pupdate_status') }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <div class="row g-1">
                                    <div class="col-md-12">
                                        <select name="status" id="{{ $product->id }}" class="pstatus-select form-select bg-light text-dark text-center {{ $product->id }}">
                                            <option value="" disabled class="bg-secondary text-light">Select Order Status</option>
                                            <option value="active" {{ ($product->status == "active")? "selected" : "" }}>Active</option>
                                            <option value="unactive" {{ ($product->status == "unactive")? "selected" : "" }}>Unactive</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                            {{-- {{ $product->status }} --}}
                        </td>
                        {{-- <td>
                            @if ($product->discount_id == 0)
                                No Discount
                            @else
                                {{ $product->discount_name }} ({{ $product->item_discount }}%)
                            @endif
                        </td> --}}
                        <td class="text-center">
                          <a href="products/gallery/{{$product->id}}" class="text-decoration-none">
                            <button class="btn btn-outline-info py-1"><i class="ti-gallery"></i></button>
                          </a>
                          <a href="products/{{$product->id}}/edit" class="text-decoration-none">
                            <button class="btn btn-outline-warning pt-1 pb-1"> <i class="ti-pencil-alt"></i> </button>
                          </a>
                          <form action="{{ url('products/delete',['id'=>$product->id]) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure want to delete?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" id="PopoverCustomT-1" class="btn btn-outline-danger pt-1 pb-1"><i class="ti-trash"> </i></button>
                            </form>
                          {{-- <a href="products/delete/{{$product->id}}" class="text-decoration-none">
                              <button class="btn btn-outline-danger pt-1 pb-1"> <i class="ti-trash"></i> </button>
                          </a> --}}
                        </td>
                    </tr>
                    @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
