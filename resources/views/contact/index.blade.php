@extends('pages.layout')

@section('title')
    Customers
@endsection


@section('container')
    <h1>Customers</h1>

    <a class="btn btn-primary"
        href="{{route('contact.create')}}">
        create</a>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Categoria</th>
            <th scope="col">Active</th>
            <th scope="col">Description</th>
            <th scope="col">View</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($customers as $customer)
          <tr>
            <th scope="row">{{$customer->id}}</th>
            <td>{{$customer->name}}</td>
            <td>{{$customer->email}}</td>
            <td>{{$customer->active}}</td>
            <td>{{$customer->description}}</td>
            <td><a href={{route('contact.show',$customer->id)}}><i class="material-symbols-outlined">
                search
                </i></a></td>
            <td><a href={{route('contact.edit',$customer->id)}}><i class="material-symbols-outlined">
                edit
                </i></a></td>
            <td>
                <form action="/contact/{{$customer->id}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit">
                        <i class="material-symbols-outlined">
                            delete
                        </i></a>
                    </button>
                </form>
                </td>
          </tr>
        @endforeach

        </tbody>
      </table>

@endsection
