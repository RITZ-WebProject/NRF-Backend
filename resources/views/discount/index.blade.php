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
        <h4 class="card-title d-inline mt-2">DISCOUNT LIST
            <a href="{{ url('discounts/create') }}"><button class="btn btn-primary btn-sm mb-2 float-end"> <i class="fas fa-plus"></i> Add</button></a>
        </h4>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="table-responsive">
            <table id="order-listing" class="table">
              <thead>
                <tr>
                    <th>No</th>
                    <th>Discount Name</th>
                    <th>Discount %</th>
                    <th class="text-center">Action</th>
                </tr>
              </thead>
              <tbody>
                    @php $i = 1; @endphp
                    @foreach ($discounts as $discount)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $discount->discount_name }}</td>
                        <td>{{ $discount->item_discount }}</td>
                        <td class="text-center">
                          <a href="discounts/{{$discount->id}}/edit">
                            <button class="btn btn-outline-warning pt-1 pb-1"> <i class="ti-pencil-alt"></i> </button>
                          </a>
                            <a href="discounts/delete/{{$discount->id}}">
                                <button class="btn btn-outline-danger pt-1 pb-1"> <i class="ti-trash"></i> </button>
                            </a>
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
