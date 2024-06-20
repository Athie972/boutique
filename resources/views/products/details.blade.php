@foreach ($products as $product)
<table border="1">
    <thead>
        <tr>
            <th scope="col">Nom</th>
            <th scope="col">Description</th>
            <th scope="col">Prix</th>
            <th scope="col">Date de création</th>
            <th scope="col">Dernière modification</th>
          </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{$product->name}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->created_at}}</td>
            <td>{{$product->updated_at}}</td>
        </tr>
    </tbody>
</table>
    
@endforeach