@extends('pages.layout')

@section('title')
    Products
@endsection


@section('container')
    <h1>Products</h1>


    <form action="/products" method="POST">
        <div class="card gap-4">
            <div class="card-header">
            Add Product
            </div>

             @include('products.form')
        </div>
    </form>

@endsection
