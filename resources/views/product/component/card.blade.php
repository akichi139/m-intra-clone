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

    .card-product {
        transition: all 03.s;
        position: relative;
        width: 290px;
        height: 423px;
        background-color: #ffffff;
        border-radius: 10px;
    }

    .card-product:hover {
        transform: scale(1.02);
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    .card-buttons {
        opacity: 0;
        transition: opacity 0.3s;
        position: absolute;
        top: 90%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        width: 100%;
    }

    .card-product:hover .card-buttons {
        opacity: 1;
        margin-right: auto;
    }

    .card-buttons a:hover {
        transform: scale(1.1);
    }

    .like input {
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
    }

    .like {
        display: block;
        position: relative;
        cursor: pointer;
        user-select: none;
    }

    .like svg {
        height: 35px;
        width: 35px;
        transition: all 0.3s;
        fill: #666;
    }

    .like svg:hover {
        transform: scale(1.1);
    }

    .like input:checked~svg {
        fill: #E3474F;
    }
</style>

<div class="card-product mx-auto my-2">
    @if($product->status == "new")
    <div class="ribbon-2">
        <h6 class="text-white">New</h6>
    </div>
    @endif
    <img class="card-img-top my-3 mx-auto" src="{{ route('displayMedia', ['filename' => $product->getMedia('productImages')->first()->id . $product->getMedia('productImages')->first()->file_name ]) }}"
        style="width: 260px;height: 260px; background-color: transparent;">
    <div class="card-body mx-3">
        <div class="d-flex justify-content-between">
            <h6 style="color: #8e8e8e;font-weight: bold;">{{ $product->product_id }}</h6>
            <h6 style="color: rgb(76, 76, 165);font-weight: bold;">THB {{ $product->price }}</h6>
        </div>
        <h6 style="color: #000;font-weight: bold;">{{ $product->product_name }}</h6>
    </div>

    <div class="card-buttons d-flex justify-content-evenly">
        @livewire('like-button', ['product_id' => $product->product_id, 'product_name' =>
        $product->product_name, 'product_price' => $product->price])
        <a href="{{route('product.item', ['id' => $product->id])}}" class="btn btn-secondary">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                class="bi bi-info-circle-fill" viewBox="0 0 16 16" style="color: #fff;">
                <path
                    d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
            </svg> Information
        </a>
    </div>
</div>