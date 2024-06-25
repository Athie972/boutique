@extends('produit.layouts.template')

 @section('content')

 <div id="container">
  <div id="divcontainer">
    <h1>Liste des produits </h1>
   
<table class="table table-hover border-info" >
      <thead>
        <tr class="table-info">
          <th scope="col">Nom du produit</th>
          <th scope="col">Description</th>
          <th scope="col">Prix</th>
          <th scope="col">Edit</th>
          <th scope="col">Delete</th>
        </tr>
      </thead>
    @foreach ($products as $product)
  
      <tbody>
          <tr>
            <th>{{$product->name}}</th>
            <td>{{$product->description}}</td>
            <td>{{$product->price}}</td>
            <td>
              <form action="{{route('product.edit',['id'=> $product->id])}}" method="GET">
              @csrf
              <button type="submit" class="btn btn-primary">Edit</button>
              </form>
            </td>
            <td >
              <form action="{{ route('product.destroy', ['id' => $product->id]) }}" method="POST">
                  @csrf
                  <button type="submit" class="btn btn-danger">Delete</button>
              </form>
            </td>
          </tr>
      </tbody>

    @endforeach

  </table>    
<a href="{{route('product.create')}}">Ajouter un produit</a> 
</div>
</div>

@endsection