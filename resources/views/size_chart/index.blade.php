@extends('layouts.app')
@section('content')

@if (session("info"))
        <div class="alert alert-info">
            {{session("info")}}
        </div>
    @endif
<div class="card">
    <div class="card-body">
        <div class="row">
            <h4 class="card-title d-inline mt-2">SIZE CHART LIST
                <a href="{{ url('size_charts/create') }}"><button class="btn btn-primary btn-sm mb-2 float-end"> <i class="fas fa-plus"></i> Add</button></a>
            </h4>
        </div>
      <div class="row">
        <div class="col-12">
          <div class="table-responsive">
            <table id="order-listing" class="table">
              <thead>
                <tr>
                    <th>No</th>
                    <th>Size Chart (Symbol) </th>
                    <th>Size Chart (Long Term) </th>
                    <th class="text-center">Action</th>
                </tr>
              </thead>
              <tbody>
                    @php $i = 1; @endphp
                    @foreach ($size_charts as $size_chart)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $size_chart->size_chart }}</td>
                        <td>{{ $size_chart->size_chart_long }}</td>
                        <td class="text-center">
                          <a href="size_charts/{{$size_chart->id}}/edit">
                            <button class="btn btn-outline-warning"> <i class="ti-pencil-alt"></i> </button>
                          </a>
                            <a href="size_charts/delete/{{$size_chart->id}}">
                                <button class="btn btn-outline-danger"> <i class="ti-trash"></i> </button>
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
