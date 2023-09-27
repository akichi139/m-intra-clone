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
        margin: 1.5em 0;
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
            <div class="card col-4" style="background-color: #aed0ff;">
                <div class="row">
                    <div class="col-2 d-flex justify-content-center my-2">
                        <div id="share">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="bi bi-share" viewBox="0 0 16 16" style="color: #fff;">
                                <path
                                    d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z" />
                            </svg>
                        </div>
                    </div>
                    <div class="col-8 d-flex justify-content-center my-2"></div>
                    <div class="col-2 d-flex justify-content-center my-2">
                        <div id="star">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="bi bi-star" viewBox="0 0 16 16" style="color: #fff;">
                                <path
                                    d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                            </svg>
                        </div>
                    </div>
                    <div class="col-12 mb-2">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ $product->image }}" class="d-block w-100"
                                        style="max-width: 500px ;max-height: 500px;border-radius: 5px;">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ $product->image }}" class="d-block w-100"
                                        style="max-width: 500px ;max-height: 500px;border-radius: 5px;">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ $product->image }}" class="d-block w-100"
                                        style="max-width: 500px ;max-height: 500px;border-radius: 5px;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-center mb-3">
                        <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1" style="border-radius: 50%;">
                            <img class="img-fluid" src="#" style="height: 25px; width: 25px;">
                        </button>
                        <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="1"
                            aria-label="Slide 2" style="border-radius: 50%;">
                            <img class="img-fluid" src="#">
                        </button>
                        <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="2"
                            aria-label="Slide 3" style="border-radius: 50%;">
                            <img class="img-fluid" src="#">
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-8 mb-2">
                <span class="my-2" style="color: #b5b5b5;">Brand : {{$product->brand->brand_name}}</span>
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
                <button class="buy--btn">ADD TO CART</button>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="row d-flex justify-content-center">
            <h2 class="col-12 d-flex justify-content-center">Data Sheet</h2>
            <iframe src="{{ asset('storage/pdfs/' . $product->datasheet) }}" width="50%" height="600"></iframe>
            <a class="btn btn-primary my-2 col-12" href="{{ asset('storage/pdfs/' . $product->datasheet) }}" target="_blank" style="max-width: 50%;">Download PDF</a>
        </div>
    </div>
</div>

@endsection