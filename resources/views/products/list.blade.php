@extends('products.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left py-2">
            <h2>Product List</h2>
        </div>
        <div class="pull-right mb-2">
            <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Price</th>
        <th>Quality</th>
        <th>Quantity</th>
        <th>description</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($products as $product)
    <tr>
        <td>{{ $product->id }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->price }}</td>
        <td>{{ $product->quality }}</td>
        <td>{{ $product->quatity }}</td>
        <td>{{ $product->description }}</td>
        <td>
            <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                <a class="btn btn-primary" href="{{ route('products.show',$product->id) }}">Show</a>

                <a class="btn btn-warning" href="{{ route('products.edit',$product->id) }}">Edit</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection