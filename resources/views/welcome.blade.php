@extends('layouts.app')

@section('content')
<div class="mx-auto" style="max-width: 80%;">
    <div id="carouselExampleCaptions" class="carousel slide mb-5" data-bs-ride="carousel" data-bs-interval="3000" style="border-radius: 10px;box-shadow: 0 4px 8px 0 lightblue, 0 6px 20px 0 lightblue">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner" style="z-index: -1;">
            <div class="carousel-item active">
                <img src="https://www.measuretronix.com/images/banner/crop-1691131280239.jpg" class="d-block w-100"
                    alt="..." style="border-radius: 10px;">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://v4i.rweb-images.com/www.measuretronix.com/images/banner/crop-1691051293454.jpg"
                    class="d-block w-100" alt="..." style="border-radius: 10px;">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://v4i.rweb-images.com/www.measuretronix.com/images/banner/crop-1690444785934.jpg"
                    class="d-block w-100" alt="..." style="border-radius: 10px;">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <div class="row">
        <div class="col-1 d-flex justify-content-start">
            <button class="btn btn-secondary" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
        </div>
        <div class="col-10">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    @foreach($products->chunk(4) as $index => $chunk)
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
            <button class="btn btn-secondary" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
        </div>
    </div>
</div>
@endsection