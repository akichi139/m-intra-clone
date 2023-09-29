@extends('layouts.app')

@section('content')
<div class="mx-auto" style="max-width: 80%;">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h2>All Categories</h2>
        </div>
        <div>
            <a href="#" class="btn btn-success mb-3">Add Categories</a>
        </div>
        @if ($message=Session::get('success'))
        <div class="alert alert-success">
            <p> {{$message}}</p>
        </div>
        @endif
        <table class="table table-bordered">
            <tr>
                <th>Categories_ID</th>
                <th>Categories_Name</th>
                <th width="280px">Action</th>
            </tr>
            @foreach($categories as $category)
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->categories_name}}</td>
                <td>
                    <form action="#" method="post">
                        <a href="#" class="btn btn-warning">EDIT</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">DELETE</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        {!!$categories->links('pagination::bootstrap-5')!!}
    </div>
</div>

@endsection