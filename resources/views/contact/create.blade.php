
@extends('pages.layout')

@section('title')
    Customers
@endsection


@section('container')
    <h1>Customers</h1>


    <form action="/contact" method="POST">
        <div class="card gap-4">
            <div class="card-header">
            Add Customer
            </div>

             @include('contact.form')
        </div>
    </form>

@endsection

