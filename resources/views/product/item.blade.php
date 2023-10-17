@extends('layouts.app')

@section('content')

<style>
    .title {
        h1 {
            margin-bottom: 0.1em;
            color: #3b3b3b;
            font-size: 1.5em;
            font-weight: 900;
        }

        span {
            font-size: 0.7em;
            color: #d9d9d9;
        }
    }

    .price {
        margin: 10px 0;
        color: #ff3f40;
        font-size: 1.2em;

        .pspan {
            padding-left: 0.15em;
            font-size: 2.9em;
        }
    }

    .description {
        clear: left;
        margin: 2em 0;

        h3 {
            margin-bottom: 1em;
        }

        ul {
            font-size: 0.8em;
            list-style: disc;
            margin-left: 1em;
        }

        li {
            text-indent: -0.6em;
            margin-bottom: 0.5em;
        }
    }

    .buy--btn {
        padding: 1.5em 3.1em;
        border: none;
        border-radius: 7px;
        font-size: 0.8em;
        font-weight: 700;
        letter-spacing: 1.3px;
        color: #fff;
        background-color: #5099ff;
        box-shadow: 2px 2px 25px -7px #3b3b3b;
        cursor: pointer;

        &:active {
            transform: scale(0.97);
        }
    }
</style>

<div class="mx-auto" style="max-width: 80%;">
    <div class="card">
        <div class="row">
            <div class="col-4">
                <div class="row">
                    <div class="col-12 mb-2">
                        <div id="carouselExampleControls" class="carousel slide mx-5" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ route('displayMedia', ['filename' => $product->getMedia('productImages')->first()->id . $product->getMedia('productImages')->first()->file_name ]) }}" class="d-block w-100"
                                        style="max-width: 500px ;max-height: 500px;border-radius: 5px;">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ route('displayMedia', ['filename' => $product->getMedia('productImages')->first()->id . $product->getMedia('productImages')->first()->file_name ]) }}" class="d-block w-100"
                                        style="max-width: 500px ;max-height: 500px;border-radius: 5px;">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ route('displayMedia', ['filename' => $product->getMedia('productImages')->first()->id . $product->getMedia('productImages')->first()->file_name ]) }}" class="d-block w-100"
                                        style="max-width: 500px ;max-height: 500px;border-radius: 5px;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1 d-flex justify-content-start">
                        <button class="btn btn-secondary" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </button>
                    </div>
                    <div class="col-10 d-flex justify-content-center mb-3">
                        <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="0"
                            class="active mx-2" aria-current="true" aria-label="Slide 1" style="border-radius: 5px;">
                            <img class="img-fluid" src="{{ route('displayMedia', ['filename' => $product->getMedia('productImages')->first()->id . $product->getMedia('productImages')->first()->file_name ]) }}"
                                style="border-radius: 5px;height: 70px; width: 70px;">
                        </button>
                        <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="1"
                            aria-label="Slide 2" style="border-radius: 5px;" class="mx-2">
                            <img class="img-fluid" src="{{ route('displayMedia', ['filename' => $product->getMedia('productImages')->first()->id . $product->getMedia('productImages')->first()->file_name ]) }}"
                                style="border-radius: 5px;height: 70px; width: 70px;">
                        </button>
                        <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="2"
                            aria-label="Slide 3" style="border-radius: 5px;" class="mx-2">
                            <img class="img-fluid" src="{{ route('displayMedia', ['filename' => $product->getMedia('productImages')->first()->id . $product->getMedia('productImages')->first()->file_name ]) }}"
                                style="border-radius: 5px;height: 70px; width: 70px;">
                        </button>
                    </div>
                    <div class="col-1 d-flex justify-content-end">
                        <button class="btn btn-secondary" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-8 mb-2">
                <span class="my-2">Brand : {{$product->brand->brand_name}}</span>
                <div class="title my-2">
                    <h1>{{$product->product_name}}</h1>
                    <span>ID: {{$product->product_id}}</span>
                </div>
                <div class="price">
                    THB <span class="pspan">{{$product->price}}</span>
                </div>
                <div class="description">
                    <h3>BENEFITS</h3>
                    <ul>
                        <li>Apples are nutricious</li>
                        <li>Apples may be good for weight loss</li>
                        <li>Apples may be good for bone health</li>
                        <li>They're linked to a lowest risk of diabetes</li>
                    </ul>
                    <h6>Guarantee: {{$product->guarantee}}</h6>
                    <h6>Supervise: {{$product->supervise}}</h6>
                </div>
                @livewire('add-item-to-cart', ['product_id' => $product->product_id, 'product_name' =>
                $product->product_name, 'product_price' => $product->price])
            </div>
        </div>
    </div>
    <div class="card my-2">
        <div class="row d-flex justify-content-center">
            <h2 class="col-12 d-flex justify-content-center">Data Sheet</h2>
            <iframe src="{{ route('displayMedia', ['filename' => $product->getMedia('productDataSheet')->first()->id . $product->getMedia('productDataSheet')->first()->file_name ]) }}" width="50%" height="600"></iframe>
            <a class="btn btn-primary my-2 col-12" href="{{ route('displayMedia', ['filename' => $product->getMedia('productDataSheet')->first()->id . $product->getMedia('productDataSheet')->first()->file_name ]) }}"
                target="_blank" style="max-width: 50%;">Download PDF</a>
        </div>
    </div>
    <h2>สินค้าประเภทเดียวกัน</h2>
    <div class="my-2">
        <div class="row">
            <div class="col-1 d-flex justify-content-start">
                <button class="btn btn-secondary" type="button" data-bs-target="#carouselProductControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </button>
            </div>
            <div class="col-10">
                <div id="carouselProductControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        @foreach($anotherProduct->chunk(4) as $index => $chunk)
                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                            <div class="row">
                                @foreach($chunk as $product)
                                @include('product.component.card')
                                @endforeach
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-1 d-flex justify-content-end">
                <button class="btn btn-secondary" type="button" data-bs-target="#carouselProductControls"
                    data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span>
                </button>
            </div>
        </div>
    </div>
</div>

@endsection