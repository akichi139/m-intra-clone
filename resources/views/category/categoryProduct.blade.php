@extends('layouts.app')

@section('content')
<style>
    ul li:hover {
        background-color: #f0f0f0;
        color: #007bff;
    }

    .product {
        padding: 5px;
    }
</style>

<div class="mx-auto" style="max-width: 80%;">
    <img src="{{ $brand_name->logo }}" style="width: 200px;height: 100px;">
    <hr>
    <div class="row">
        <div class="col-3">
            @include('brand.component.sidebar')
        </div>
        <div class="col-9">
            <div class="d-flex">
                <div class="d-flex align-content-start flex-wrap">
                    @foreach($products as $product)
                    <div class="product">
                        <a href="{{route('product.brand', ['brand' => '$brand->brand_name'])}}">
                            @include('product.component.card')
                        </a>
                    </div>
                    @endforeach
                </div>
                {!!$products->links('pagination::bootstrap-5')!!}
            </div>
        </div>
    </div>
</div>

@endsection