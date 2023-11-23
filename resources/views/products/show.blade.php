@extends('pages.layout')

@section('title')
    Products
@endsection


@section('container')
    <h1>{{$product->name}}</h1>

   <table class="table">
        <thead>
          <tr>
            <th scope="col">#ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Categoria</th>
            <th scope="col">Active</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">{{$product->id}}</th>
            <td>{{$product->name}}</td>
            <td>{{$product->Category->name}}</td>
            <td>{{$product->active}}</td>
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
