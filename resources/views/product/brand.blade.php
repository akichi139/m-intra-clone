@extends('layouts.app')

@section('content')
<div class="mx-auto" style="max-width: 80%;">
    <div class="row">
        <div class="col-md-4">
            <h1>{{$brand}}</h1>
            
        </div>
        <div class="col-md-8">
        <div class="d-flex align-content-start flex-wrap">
            @foreach($products as $product)
            @include('product.component.card')
            @endforeach
        </div>
        {!!$products->links('pagination::bootstrap-5')!!}
    </div>
    </div>
</div>

@endsection