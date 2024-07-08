@extends('layouts.admin')

@section('content')
<div class="container-fluid px-4">
    <div class="me-md-3 me-xl-5">
        <h2>General Reports</h2>
        <p class="ab-md-0">Your analytics dashboard</p>
        <br>
    </div>
    <div class="row">
        <div class="col-md-4 mb-3">
            <div class="card card-body bg-primary text-white">
                <label>Total Users</label>
                <h1>{{$totalUsers}}</h1>
                <a href="{{url('admin/users')}}" class="text-white">view</a>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card card-body bg-success text-white">
                <label>Total Vendors</label>
                <h1>{{$totalVendors}}</h1>
                <a href="{{url('admin/users')}}" class="text-white">view</a>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card card-body bg-danger text-white">
                <label>Total Farmers</label>
                <h1>{{$totalFarmers}}</h1>
                <a href="{{url('admin/users')}}" class="text-white">view</a>
            </div>
        </div>
    </div>
</div>

<!--pie chart-->
<div class="row">
  <div class="col-md-12 mb-3">
@include('admin.pie')
  </div>

</div>
@endsection
