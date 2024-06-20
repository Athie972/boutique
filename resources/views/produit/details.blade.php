@section('details')
    
@foreach ($products as $product)
<table border="1">
    <thead>
        <tr>
            <th scope="col">Nom</th>
            <th scope="col">Description</th>
            <th scope="col">Prix</th>
          </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{$product->name}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->price}}</td>
        </tr>
    </tbody>
</table>
    
@endforeach
@endsection