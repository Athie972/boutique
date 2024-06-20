@extends('products.template')
@section('content_1')
    
    <h1>HELLO</h1>
    <ul>
    @foreach ($products as $product)
    <li>{{$product->name}}</li>
    @endforeach
</ul>
@endsection
