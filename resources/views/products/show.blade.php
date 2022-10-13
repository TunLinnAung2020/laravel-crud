@extends('products.layout')

@section('content')
<div class="row justify-content-center mt-3">
    <div class="col-md-8">
        <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
    </div>
</div>
<div class="row justify-content-center mt-2">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                Show Product
            </div>
            <div class="card-body">
                <div>
                    <strong>Name:</strong>
                    {{$product->name}}
                </div>
                <div>
                    <strong>Price:</strong>
                    {{$product->price}}
                </div>
                <div>
                    <strong>Quality:</strong>
                    {{$product->quality}}
                </div>
                <div>
                    <strong>Quantity:</strong>
                    {{$product->quatity}}
                </div>
                <div>
                    <strong>Description:</strong>
                    {{$product->description}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection