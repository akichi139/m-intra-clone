@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col">
            <div class="card-body p-4">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="overflow-auto" style="max-height: 400px;">
                                @foreach(json_decode($saleOrder->cart_content) as $item)
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex flex-row align-items-center">
                                                <div>
                                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img1.webp"
                                                        class="img-fluid rounded-3" alt="Shopping item"
                                                        style="width: 65px;">
                                                </div>
                                                <div class="ms-3">
                                                    <h5>{{ $item->name }}</h5>
                                                    <p class="small mb-0">{{ $item->id }}</p>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row align-items-center">
                                                <div style="width: 50px;">
                                                    <h5 class="fw-normal mb-0">{{ $item->quantity }}</h5>
                                                </div>
                                                <div style="width: 80px;">
                                                    <h5 class="mb-0">THB {{ $item->price * $item->quantity }}</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 text-white" style="background-color: gray; border-radius: 5px;">
                        <div class="p-5">
                            <h3 class="fw-bold mt-2 pt-1">Summary</h3>
                            <hr class="my-4">

                            <div class="d-flex justify-content-between mb-2">
                                <h5 class="text-uppercase">Total Items</h5>
                                <h5>{{ $saleOrder->cart_item }} items</h5>
                            </div>

                            <div class="d-flex justify-content-between mb-2">
                                <h5 class="text-uppercase">price</h5>
                                <h5>THB {{ $saleOrder->subtotal }}</h5>
                            </div>

                            <div class="d-flex justify-content-between mb-2">
                                <h5 class="text-uppercase mb-2">Payment type</h5>
                                <h5>{{ $saleOrder->payment_type }}</h5>
                            </div>

                            <div class="d-flex justify-content-between mb-2">
                                <h5 class="text-uppercase mb-2">Promotion Code</h5>
                                <h5>{{ $saleOrder->promo_code }}</h5>
                            </div>

                            <div class="d-flex justify-content-between mb-2">
                                <h6 style="color: #fff;">Promotion Discount</h6>
                                <h6 style="color: #fff;">-</h6>
                            </div>

                            <div class="d-flex justify-content-between mb-2">
                                <h6 style="color: #fff;">tax :7%</h6>
                                <h6 style="color: #fff;">{{ $saleOrder->tax }}</h6>
                            </div>

                            <hr class="my-4">

                            <div class="d-flex justify-content-between mb-4">
                                <h5 class="text-uppercase">Total price</h5>
                                <h5>THB {{ $saleOrder->total }}</h5>
                            </div>

                            <div class="d-flex justify-content-end">
                                <a href="{{ route('saleorder_to_invoice',['id' => $saleOrder->id]) }}" type="button"
                                    class="btn btn-dark btn-block btn-lg">
                                    Confirm Sale Order
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection