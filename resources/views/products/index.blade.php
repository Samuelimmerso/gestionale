@extends('pages.layout')

@section('title')
    Products
@endsection


@section('container')
    <h1>Products</h1>

    <a class="btn btn-primary"
        href="{{route('products.create')}}">
        create</a>
    
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Categoria</th>
            <th scope="col">Active</th>
            <th scope="col">View</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($products as $product)
          <tr>
            <th scope="row">{{$product->id}}</th>
            <td>{{$product->name}}</td>
            <td>{{$product->Category->name}}</td>
            <td>{{$product->active}}</td>
            <td><a href={{route('products.show',$product->id)}}><i class="material-symbols-outlined">
                search
                </i></a></td>
            <td><a href={{route('products.edit',$product->id)}}><i class="material-symbols-outlined">
                edit
                </i></a></td>
            <td>
                <form action="/products/{{$product->id}}" method="POST">
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



{{-- <span class="text-primary">Prodotti Attivi</span>
    <ul>
        @foreach ($productsActive as $p)
            <li>{{$p->id}}:{{$p->name}}
                <span class="text-muted">({{$p->description}})</span>
            </li>

        @endforeach
    </ul>

<span class="text-primary">Prodotti Non Attivi</span>
<ul>
    @foreach ($productsInactive as $p)
        <li>{{$p->id}}:{{$p->name}}
            <span class="text-muted">({{$p->description}})</span>
        </li>

    @endforeach
</ul> --}}

@endsection
