@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Line chart</h4>
          <div id="c3-line-chart"></div>
        </div>
      </div>
    </div>
    <div class="col-lg-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Spline chart</h4>
          <div id="c3-spline-chart"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Step chart</h4>
          <div id="c3-step-chart"></div>
        </div>
      </div>
    </div>
    <div class="col-lg-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Bar chart</h4>
          <div id="c3-bar-chart"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Pie chart</h4>
          <div id="c3-pie-chart"></div>
        </div>
      </div>
    </div>
    <div class="col-lg-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Donut chart</h4>
          <div id="c3-donut-chart"></div>
        </div>
      </div>
    </div>
  </div>
@endsection