@extends('layouts.app')

@section('content')
<style>
    .media-scroller {
        --_spacer: var(--size-3);
        display: grid;
        gap: var(--_spacer);
        grid-auto-flow: column;
        grid-auto-columns: 27%;

        padding: 0 var(--_spacer) var(--_spacer);

        overflow-x: auto;
        overscroll-behavior-inline: contain;
    }

    .snaps-inline {
        scroll-snap-type: inline mandatory;
        scroll-padding-inline: var(--_spacer, 1rem);
    }

    .snaps-inline>* {
        scroll-snap-align: start;
    }

    .media-scroller::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        background-color: #F5F5F5;
        border-radius: 10px;
    }

    .media-scroller::-webkit-scrollbar {
        height: 10px;
        background-color: #F5F5F5;
    }

    .media-scroller::-webkit-scrollbar-thumb {
        border-radius: 10px;
        background-color: #5099ff;
    }
</style>

<div id="carouselExampleCaptions" class="carousel slide mb-5" data-bs-ride="carousel" data-bs-interval="3000">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://www.measuretronix.com/images/banner/crop-1691131280239.jpg" class="d-block w-100"
                alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://v4i.rweb-images.com/www.measuretronix.com/images/banner/crop-1691051293454.jpg"
                class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://v4i.rweb-images.com/www.measuretronix.com/images/banner/crop-1690444785934.jpg"
                class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="mx-auto" style="max-width: 80%;">
    <div class="row">
        <div class="col-1 d-flex justify-content-start">
            <button class="btn btn-primary" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">⟵
            </button>
        </div>
        <div class="col-10 d-flex justify-content-center">
            <h4 class="category-section-title fw-bold" style="color: #5099ff;">New Product</h4>
        </div>
        <div class="col-1 d-flex justify-content-end">
            <button class="btn btn-primary" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">⟶
            </button>
        </div>
        <div class="col-12">
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
    </div>
</div>
@endsection