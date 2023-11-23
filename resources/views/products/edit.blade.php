@extends('pages.layout')

@section('title')
    Products
@endsection


@section('container')
    <h1>Products</h1>


    <form action="/products/{{$product->id}}" method="POST">
        <div class="card">
            <div class="card-header">
            Edit Product
            </div>
            <div class="card-body">
              @method('PATCH')
              @include('products.form')
        </div>
    </form>

@endsection
