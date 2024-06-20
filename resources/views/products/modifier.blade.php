<h2>Modifier un produit</h2>
<form action="{{ route('product.update', ['id' => $product->id]) }}" method="POST">
    @csrf
    <div>
        <label for="name">Nom</label>
        <input type="text" name="name" id="name" value="{{$product->name}}" required>
    </div>
    <div>
        <label for="description">Description</label>
        <input type="text" name="description" id="description"  value="{{$product->description}}" required>
    </div>
    <div>
        <label for="price">Prix</label>
        <input type="text" name="price" id="price"  value="{{$product->price}}" required>
    </div>
    <button type="submit">Modifier</button>
</form>