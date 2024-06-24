<h2>Ajouter un produit</h2>
    <form action="{{ route('product.store')  }}" method="POST">
        @csrf
        <div>
            <label for="name">Nom</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div>
            <label for="description">Description</label>
            <input type="text" name="description" id="description" required>
        </div>
        <div>
            <label for="price">Prix</label>
            <input type="text" name="price" id="price" required>
        </div>
        <input type="hidden" name="status" value='0'>
        <button type="submit" class="btn-add">Ajouter</button>
    </form>