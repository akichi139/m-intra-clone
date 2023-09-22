@extends('layouts.app')

@section('content')
<style>
    ul li:hover {
        color: #007bff;
    }

    .product {
        padding: 5px;
    }

    .span1 {
        color: #5099ff;
        font-size: 1.2em;
        cursor: pointer;
        display: block;
        padding-right: auto;
    }

    .span1::after {
        float: right;
        right: 10%;
    }

    .slide {
        clear: both;
        width: 100%;
        height: 0px;
        overflow-x: hidden;
        overflow-y: auto;
        transition: height .4s ease;
    }

    .slide li {
        padding: 5px;
    }

    #touch {
        position: absolute;
        opacity: 0;
        height: 0px;
    }

    #touch:checked+.slide {
        height: 200px;
    }

    .span2 {
        color: #5099ff;
        font-size: 1.2em;
        cursor: pointer;
        display: block;
        padding-right: auto;
    }

    .span2::after {
        float: right;
        right: 10%;
    }

    .slide2 {
        clear: both;
        width: 100%;
        height: 0px;
        overflow-x: hidden;
        overflow-y: auto;
        transition: height .4s ease;
    }

    .slide2 li {
        padding: 5px;
    }

    #touch2 {
        position: absolute;
        opacity: 0;
        height: 0px;
    }

    #touch2:checked+.slide2 {
        height: 200px;
    }

    .span3 {
        color: #5099ff;
        font-size: 1.2em;
        padding-right: auto;
    }
</style>

<div class="mx-auto" style="max-width: 80%;">
    {{-- @livewire('filter-brand-products', ['brand_name' => $brand->brand_name]) --}}

    <img src="{{ $brand->logo }}" style="width: 200px;height: 100px;">
    <hr>

    <div class="row">
        <div class="col-3">
            <label for="touch">
                <span class="span1">Brands ⮟</span>
            </label>
            <input type="checkbox" id="touch">
            <ul class="slide">
                @foreach($brands as $all_brand)
                <li>
                    <a class="text-decoration-none link-dark"
                        href="{{ route('brand_product', ['brand_name' => $all_brand->brand_name]) }}">{{ $all_brand->brand_name
                        }}</a>
                </li>
                @endforeach
            </ul>
            <hr>
            <label for="touch2">
                <span class="span2">Categories ⮟</span>
            </label>
            <input type="checkbox" id="touch2">
            <ul class="slide2">
                @foreach($categories as $category)
                <li>
                    <label>
                        <input type="checkbox" name="categoryIds[]" value="{{ $category->id }}"
                            @if(in_array($category->id, (array)$categoryIds)) checked @endif>
                        {{ $category->categories_name }}
                    </label>
                </li>
                @endforeach
            </ul>
            <hr>
            <div class="row">
                <span class="span3">Price</span>
                <div class="col">
                    <input type="number" id="minValue" class="form-control" name="minValue" placeholder="min" value="{{ $minValue }}">
                </div>
                <div class="col-auto">
                    <span>To</span>
                </div>
                <div class="col">
                    <input type="number" id="maxValue" class="form-control" name="maxValue" placeholder="max" value="{{ $maxValue }}">
                </div>
            </div>
            <div class="row mt-3 mx-2">
                <button class="btn btn-primary" onclick="applyFilters()">Search</button>
            </div>
            <div class="row mt-3 mx-2">
                <a href="{{route('brand_product', ['brand_name' => 'Amprobe'])}}" class="btn btn-secondary">Clear
                    Filter</a>
            </div>
        </div>

        <div class="col-9">
            <div class="d-flex">
                <div class="d-flex align-content-start flex-wrap">
                    @foreach($products as $product)
                    <div class="product">
                        <a href="{{ route('product.brand', ['brand' => $brand->brand_name]) }}">
                            @include('product.component.card')
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        {!! $products->links('pagination::bootstrap-5') !!}
    </div>
</div>

<script>
    function applyFilters() {
        var categoryCheckboxes = document.getElementsByName('categoryIds[]');
        var selectedCategories = [];
        categoryCheckboxes.forEach(function (checkbox) {
            if (checkbox.checked) {
                selectedCategories.push(checkbox.value);
            }
        });

        var minValue = document.getElementById('minValue').value;
        var maxValue = document.getElementById('maxValue').value;

        // Construct URL with selected filters
        var url = '{{ route("brand_product", ["brand_name" => $brand->brand_name]) }}/';
        url += (selectedCategories.length > 0 ? selectedCategories.join(',') : null) + '/';
        url += (minValue ? minValue : '') + '/' + (maxValue ? maxValue : '');

        // Redirect to the constructed URL
        window.location.href = url;
    }
</script>
@endsection
