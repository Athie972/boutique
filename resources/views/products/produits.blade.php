@extends('products.template')
@section('content_1')
    
    <h1>HELLO</h1>
    <ul>
    @foreach ($products as $product)
    <li>{{$product->name}} : 
        Description: {{$product->description}}
        Prix: {{$product->price}}
        <form action="{{route('product.edit',['id'=> $product->id])}}" method="GET">
        @csrf
        <button type="submit" class="btn-edit">Edit</button>
    </form>
    <form action="{{ route('product.destroy', ['id' => $product->id]) }}" method="POST">
        @csrf
        <button type="submit" class="btn-delete">Delete</button>
    </form>
    </li>
    
    @endforeach
</ul>
@endsection
