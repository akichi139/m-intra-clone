<style>
    .ribbon-2 {
        --f: 10px;
        /* control the folded part*/
        --r: 15px;
        /* control the ribbon shape */
        --t: 10px;
        /* the top offset */

        position: absolute;
        inset: var(--t) calc(-1*var(--f)) auto auto;
        padding: 0 10px var(--f) calc(10px + var(--r));
        clip-path:
            polygon(0 0, 100% 0, 100% calc(100% - var(--f)), calc(100% - var(--f)) 100%,
                calc(100% - var(--f)) calc(100% - var(--f)), 0 calc(100% - var(--f)),
                var(--r) calc(50% - var(--f)/2));
        background: #BD1550;
        box-shadow: 0 calc(-1*var(--f)) 0 inset #0005;
    }

    .card {
        transition: all 03.s;
    }

    .card:hover {
        transform: scale(1.02);
    }

    .card:hover::after {
        bottom: 0;
        opacity: 1;
    }

    .card::after {
        content: "View Detail ➜";
        padding-top: 1.25em;
        padding-left: 1.25em;
        position: absolute;
        left: 0;
        bottom: 0px;
        background: linear-gradient(to bottom, rgba(80, 153, 255, 0), rgba(80, 153, 255, 1));
        color: #fff;
        height: 15%;
        width: 100%;
        transition: all 80ms;
        font-weight: 600;
        text-transform: uppercase;
        opacity: 0;
        border-bottom-left-radius: 5px;
        border-bottom-right-radius: 5px;
    }
</style>

<div class="card mx-auto my-2" style="width: 290px;height: 423px; background-color: #ffffff;">
    <a href="{{ route('product.item', ['id' => $product->id]) }}">
        @if($product->status == "new")
        <div class="ribbon-2">
            <h6 class="text-white">New</h6>
        </div>
        @endif
        <img class="card-img-top" src="{{ $product->image }}" style="width: 275px;height: 290px;">
        <div class="card-body">
            <h5 class="card-title">{{ $product->product_name }}</h5>
            <p class="card-text fw-bold" style="font-size: 14pt; color: rgb(76, 76, 165);">THB {{ $product->price }}</p>
        </div>
    </a>
</div>