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
        position: relative;
        width: 290px;
        height: 423px;
        background-color: #ffffff;
        border-radius: 10px;
    }

    .card:hover {
        transform: scale(1.02);
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    .card-buttons {
        opacity: 0;
        transition: opacity 0.3s;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        width: 100%;
    }

    .card:hover .card-buttons {
        opacity: 1;
        margin-right: auto;
    }

    .card-buttons a:hover {
        transform: scale(1.1);
    }
</style>

<div class="card mx-auto my-2">
    @if($product->status == "new")
    <div class="ribbon-2">
        <h6 class="text-white">New</h6>
    </div>
    @endif
    <img class="card-img-top" src="{{ asset('storage/images/' . $product->image) }}"
        style="width: 275px;height: 290px; background-color: transparent;">
    <div class="card-body">
        <h5 class="card-title">{{ $product->product_name }}</h5>
        <p class="card-text fw-bold" style="font-size: 14pt; color: rgb(76, 76, 165);">THB {{ $product->price }}</p>
    </div>

    <div class="card-buttons">
        <a href="#" class="btn btn-warning" style="border-radius: 50%;">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-star"
                style="color: #fff;" viewBox="0 0 16 16">
                <path
                    d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
            </svg>
        </a>
        <a href="{{route('product.item', ['id' => $product->id])}}" class="btn btn-secondary" style="border-radius: 50%;"><svg xmlns="http://www.w3.org/2000/svg"
                width="25" height="25" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16"
                style="color: #fff;">
                <path
                    d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
            </svg></a>
        <a href="#" class="btn btn-primary" style="border-radius: 50%;"><svg xmlns="http://www.w3.org/2000/svg"
                width="25" height="25" fill="currentColor" class="bi bi-share-fill" viewBox="0 0 16 16"
                style="color: #fff;">
                <path
                    d="M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5z" />
            </svg></a>
    </div>
</div>