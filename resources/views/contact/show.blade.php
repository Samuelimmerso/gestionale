@extends('pages.layout')

@section('title')
customer
@endsection


@section('container')
    <h1>{{$customer->name}}</h1>

   <table class="table">
        <thead>
          <tr>
            <th scope="col">#ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Categoria</th>
            <th scope="col">Active</th>
            <th scope="col">description</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">{{$customer->id}}</th>
            <td>{{$customer->name}}</td>
            <td>{{$customer->email}}</td>
            <td>{{$customer->active}}</td>
            <td>{{$customer->description}}</td>
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
