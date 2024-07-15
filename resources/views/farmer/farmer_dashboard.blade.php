@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Available Orders</div>
                    <div class="card-body">
                        @foreach($vendorOrders as $order)
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $order->product }}</h5>
                                    <p class="card-text">Demands: {{ $order->demands }} kg</p>
                                    <p class="card-text">Location: {{ $order->location }}</p>
                                    @if($order->photo)
                                        <img src="{{ asset('storage/' . $order->photo) }}" alt="Order Photo" class="img-fluid mb-2" style="max-height: 200px;">
                                    @else
                                        <img src="{{ asset('placeholder.png') }}" alt="No Photo" class="img-fluid mb-2" style="max-height: 200px;">
                                    @endif
                                    <a href="{{ route('farmer.orders.show', $order->id) }}" class="btn btn-primary">Accept Order</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
