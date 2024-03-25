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
        <h4 class="card-title d-inline mt-2 text-light">PRODUCT REPORT
        </h4>
      </div>

      <div class="widget-content-left">
        <label class="ml-2"> </label>
        <div class="btn-group">
            <input type="text" name="daterange1" value="" class="form-control rounded"
                style="width:250px;background:#fff;color:#000;padding-left:50px;" />
            <input type="text" name="daterangestart" class="d-none" id="daterangestart1" value="" />
            <input type="text" name="daterangeend" class="d-none" id="daterangeend1" value="" />
        </div>
    </div><br>

      <div class="row">
        <div class="col-12">
          <div class="table-responsive">
            <table id="order-listing" class="table data_table">
              <thead class="bg-light text-dark">
                <tr>
                    <th>No</th>
                    <th>Product Name</th>
                    {{-- <th>Product ID</th> --}}
                    <th>Category</th>
                    <th>Sold qty (S)</th>
                    <th>Sold qty (M)</th>
                    <th>Sold qty (L)</th>
                    <th>Sold qty (XL)</th>
                    <th>Sold qty (XXL)</th>
                    <th>Sold qty (XXXL)</th>
                    <th>Sold qty (Total)</th>
					          <th>Cancelled qty</th>
                    <th>Sold amount (MMK)</th>
                </tr>
              </thead>
              <tbody>
                    @php $i = 1; @endphp
                    @foreach ($productCounts as $pcount)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td id="product_name">
                                {{ $pcount->product_name??'Deleted Product' }} 
                            </td>
                            {{-- <td>{{ $pcount->product_id }}</td> --}}
                            <td id="cat_name">{{ $pcount->cat_name }}</td>
                            <td id="count_sm">{{ $pcount->count_sm }}</td>
                            <td id="count_m">{{ $pcount->count_m }}</td>
                            <td id="count_l">{{ $pcount->count_l }}</td>
                            <td id="count_xl">{{ $pcount->count_xl }}</td>
                            <td id="count_xxl">{{ $pcount->count_xxl }}</td>
                            <td id="count_xxxl">{{ $pcount->count_xxxl }}</td>
                            <td id="total_qty">{{ $pcount->total_qty }}</td>
							<td style="color:#ff0000;">{{ $pcount->count_cancelled }}</td>
                            <td id="total_price">{{ number_format($pcount->price * $pcount->total_qty) }}</td>
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
