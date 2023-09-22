@extends('layouts.app')

@section('content')

<div class="mx-auto" style="max-width: 80%;">
    <div class="row">
        <div class="col-lg-12">
            <h2>Edit Product</h2>
        </div>
        <div>
            <a href="{{route('product.index')}}" class="btn btn-primary">Back</a>
        </div>
        <form action="{{route('product.update', $product->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="row">
                <div class="col-md-12 mt-2">
                    <div class="from-group">
                        <strong>Product ID</strong>
                        <input type="text" name="product_id" class="form-control" placeholder="product_id" value="{{$product->product_id}}">
                        @error('product_id')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12 mt-2">
                    <div class="from-group">
                        <strong>Product Name</strong>
                        <input type="text" name="product_name" class="form-control" placeholder="product_name" value="{{$product->product_name}}">
                        @error('product_name')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12 mt-2">
                    <div class="from-group">
                        <strong>Product Image</strong>
                        <input type="file" name="image" id="image" accept="image/*">
                    </div>
                </div>
                <div class="col-md-12 mt-2">
                    <div class="form-group">
                        <strong>Category</strong>
                        <select id="category" class="form-select" name="category">
                            @foreach($categories as $category)
                            <option value="{{$category->id}}" @selected($product->category_id == $category->id)>{{$category->categories_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-12 mt-2">
                    <div class="form-group">
                        <strong>Brand</strong>
                        <select id="brand" class="form-select" name="brand">
                            @foreach($brands as $brand)
                            <option value="{{$brand->id}}" @selected($product->brand_id == $brand->id)>{{$brand->brand_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-12 mt-2">
                    <div class="from-group">
                        <strong>Price</strong>
                        <input type="number" step="0.01" name="price" id="price" value="{{$product->price}}">
                        @error('price')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12 mt-2">
                    <div class="from-group">
                        <strong>Product Data Sheet</strong>
                        <input type="file" accept=".pdf" name="pdf_input" id="pdf_input">
                    </div>
                </div>
                <div class="col-md-12 mt-2">
                    <div class="form-group">
                        <strong>Supervise</strong>
                        <select id="employeeSelect" class="form-select" name="supervise[]">
                            @foreach($employees as $employee)
                            <option value="{{$employee->name}}">{{$employee->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-12 mt-2">
                    <div class="from-group">
                        <strong>Guarantee</strong>
                        <input type="number" name="guarantee" id="guarantee" value="{{$product->guarantee}}">
                        @error('guarantee')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12 mt-2">
                    <button type="submit" class="mt-3 btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection