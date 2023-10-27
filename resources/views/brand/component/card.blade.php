<style>
    .card {
        transition: all 03.s;
    }

    .card:hover {
        transform: scale(1.05);
    }

    .card:hover::after {
        bottom: 0;
        opacity: 1;
    }

    .card::after {
        content: "SHOP THIS BRAND ➜";
        padding-top: 1.25em;
        padding-left: 1.25em;
        position: absolute;
        left: 0;
        bottom: 0px;
        background: linear-gradient(to bottom, rgba(80, 153, 255, 0), rgba(80, 153, 255, 1));
        color: #fff;
        height: 30%;
        width: 100%;
        transition: all 80ms;
        font-weight: 600;
        text-transform: uppercase;
        opacity: 0;
        border-bottom-left-radius: 5px;
        border-bottom-right-radius: 5px;
    }
</style>

<div class="card mx-auto my-2" style="width: 200px;height: 200px; background-color: transparent;">
    <a href="{{route('brand_product', ['brand_name' => $brand->brand_name])}}">
        <img class="card-body" src="{{ asset('storage/'. $brand->logo) }}" style="width: 200px;height: 200px;">
    </a>
</div>
