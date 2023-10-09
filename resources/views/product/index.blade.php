@extends('layouts.app')

@section('content')
<div class="mx-auto" style="max-width: 80%;">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h2>All Product</h2>
        </div>
        <div>
            <a href="{{route('product.create')}}" class="btn btn-success mb-3">Add Product</a>
        </div>
        @if ($message=Session::get('success'))
        <div class="alert alert-success">
            <p> {{$message}}</p>
        </div>
        @endif
        <table class="table table-bordered">
            <tr>
                <th>Product_ID</th>
                <th>Product_Name</th>
                <th>Image</th>
                <th>Category</th>
                <th>Brand</th>
                <th>Price</th>
                <th>Status</th>
                <th>Datasheet</th>
                <th>Supervise</th>
                <th>Guarantee</th>
                <th width="280px">Action</th>
            </tr>
            @foreach($products as $product)
            <tr>
                <td>{{$product->product_id}}</td>
                <td>{{$product->product_name}}</td>
                <td>
                    <img src="{{ route('displayImage', [$product->getMedia('productImages')->first()->id, 'filename' => $product->getMedia('productImages')->first()->file_name ]) }}" width="100" height="100">
                </td>
                <td>{{$product->Category->categories_name}}</td>
                <td>{{$product->brand->brand_name}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->status}}</td>
                <td>
                    <a href="{{ route('displayImage', [$product->getMedia('productDataSheet')->first()->id, 'filename' => $product->getMedia('productDataSheet')->first()->file_name ]) }}" target="_blank">View PDF</a>
                </td>
                <td>{{$product->supervise}}</td>
                <td>{{$product->guarantee}}</td>
                <td>
                    <form action="{{route('product.destroy', $product->id)}}" method="post">
                        <a href="{{route('product.edit', $product->id)}}" class="btn btn-warning">EDIT</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">DELETE</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        {!!$products->links('pagination::bootstrap-5')!!}
    </div>
</div>

@endsection