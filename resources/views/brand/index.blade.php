@extends('layouts.app')

@section('content')
<style>
    ul li:hover {
        background-color: #f0f0f0;
        color: #007bff;
    }

    .brand {
        padding: 5px;
    }
</style>

<div class="mx-auto" style="max-width: 80%;">
    <h1>Brands</h1>
    <hr>
    <div class="row">
        <div class="col-3">
            <ul>
                @foreach($brands as $brand)
                <li>
                    <a class="link-secondary" href="{{route('brand_product', ['brand_name' => $brand->brand_name])}}">{{$brand->brand_name}}</a>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="col-9">
            <div class="d-flex">
                <div class="d-flex align-content-start flex-wrap">
                    @foreach($brands as $brand)
                    <div class="brand">
                        @include('brand.component.card')
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection