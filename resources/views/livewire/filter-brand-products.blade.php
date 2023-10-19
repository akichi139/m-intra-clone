<style>
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

<div>
    <img src="{{ $brand->logo }}" style="width: 200px;height: 100px;">
    <hr>

    <div class="row">
        <div class="col-3">
            <label for="touch">
                <span class="span1">Brands ⮟</span>
            </label>
            <input type="checkbox" id="touch">
            <ul class="slide">
                @foreach($brands as $brand)
                <li>
                    <a class="text-decoration-none link-dark"
                        href="{{ route('brand_product', ['brand_name' => '$brand->brand_name']) }}">{{ $brand->brand_name
                        }}</a>
                </li>
                @endforeach
            </ul>
            <hr>
            <form wire:submit="filterProducts">
                <label for="touch2">
                    <span class="span2">Categories ⮟</span>
                </label>
                <input type="checkbox" id="touch2">
                <ul class="slide2">
                    @foreach($categorys as $category)
                    <li>
                        <label>
                            <input type="checkbox" wire:model="categoryIds" value="{{ $category->id }}">
                            {{ $category->categories_name }}
                        </label>
                    </li>
                    @endforeach
                </ul>
                <hr>
                <div class="row">
                    <span class="span3">Price</span>
                    <div class="col">
                        <input type="number" class="form-control" wire:model="minValue" name="minValue"
                            placeholder="min">
                    </div>
                    <div class="col-auto">
                        <span>To</span>
                    </div>
                    <div class="col">
                        <input type="number" class="form-control" wire:model="maxValue" name="maxValue"
                            placeholder="max">
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Search</button>
            </form>
            {{$minValue}} to {{$maxValue}}
            <button class="btn btn-secondary" wire:click="clearFilters">Clear Filters</button>
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