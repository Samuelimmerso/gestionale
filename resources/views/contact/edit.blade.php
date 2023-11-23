@extends('pages.layout')

@section('title')
    Customer Edit
@endsection


@section('container')
    <h1>{{$customer->id}}</h1>


    <form action="/contact/{{$customer->id}}" method="GET">
        <div class="card">
            <div class="card-header">
            Edit Customer
            </div>
            <div class="card-body">
              @method('PATCH')
              @include('contact.form')
        </div>
    </form>

@endsection
