@extends('layouts.app')
@section('content')
{{-- <div class="row"> --}}
    {{-- <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-lg-12">
              <div class="border-bottom text-center pb-4">
                <div class="mb-3">
                  <h3>{{$staff->username}}</h3>
                </div>
                <p class="w-75 mx-auto mb-3">{{$staff->user_roles}}</p>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}


  <div class="row">
    <div class="col-md-5 grid-margin grid-margin-md-0 stretch-card mx-auto">
        <div class="card">
            <div class="card-body text-center">
                <div>
                    <img src="{{asset('admin/images/faces/admin.png')}}" class="img-lg rounded-circle mb-2" alt="profile image"/>
                    <h4>{{$staff->username}}</h4>
                    <p class="text-muted mb-0">{{$staff->user_roles}}</p>
                </div>
                <p class="mt-2 card-text">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Aenean commodo ligula eget dolor. Lorem
                </p>
                <a href="{{url('/dashboard')}}">
                    <button class="btn btn-info btn-sm mt-3 mb-4">Dashboard</button>
                </a>
                {{-- <button class="btn btn-info btn-sm mt-3 mb-4">Dashboard</button> --}}
				@if(Session()->get('user_roles') === 'admin')
                
                <div class="border-top pt-3">
                    <div class="row">
                        <div class="col-4">
                            <h6>{{ $category_count }}</h6>
                            <p><a href="{{ url('/categories') }}" class="text-decoration-none">Categories</a></p>
                        </div>
                        <div class="col-4">
                            <h6>{{ $product_count }}</h6>
                            <p><a href="{{ url('/products') }}" class="text-decoration-none">Products</a></p>
                        </div>
                        <div class="col-4">
                            <h6>{{ $order_count }}</h6>
                            <p><a href="{{ url('/orders') }}" class="text-decoration-none">Orders</a></p>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
  </div>

{{-- </div> --}}
@endsection
