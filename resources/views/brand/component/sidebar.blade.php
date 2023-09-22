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

    <label for="touch">
        <span class="span1">Brands ⮟</span>
    </label>
    <input type="checkbox" id="touch">
    <ul class="slide">
        @foreach($brands as $brand)
        <li>
            <a href="{{route('brand_product', ['brand_name' => '$brand->brand_name'])}}">{{$brand->brand_name}}</a>
        </li>
        @endforeach
    </ul>
    <hr>
    <label for="touch2">
        <span class="span2">Categorys ⮟</span>
    </label>
    <input type="checkbox" id="touch2">
    <ul class="slide2">
        @foreach($categorys as $category)
        <li>
            <label>
                <input type="checkbox" wire:model="categoryNames" value="{{$category->categories_name}}">
                {{$category->categories_name}}
            </label>
        </li>
        @endforeach
    </ul>
    <hr>
    <div class="row">
        <span class="span3">Price</span>
        <div class="col">
            <input type="number" class="form-control" wire:model="minValue" id="minInput" name="minValue" placeholder="min">
        </div>
        <div class="col-auto">
            <span>To</span>
        </div>
        <div class="col">
            <input type="number" class="form-control" wire:model="maxValue" id="maxInput" name="maxValue" placeholder="max">
        </div>
    </div>
    <div class="row mt-3">
        <button wire:click="filterProducts" type="submit" class="btn btn-primary">Search</button>
    </div>
    <div class="row mt-3">
        <button wire:click="clearFilters" type="submit" class="btn btn-secondary">Clear filter</button>
    </div>

</div>