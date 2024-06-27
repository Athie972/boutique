<x-app-layout>

<x-slot name="header">
  <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Dashboard') }}
  </h2>
</x-slot>

    <h1 class="flex items-center text-5xl font-extrabold dark:text-white">Liste des produits</h1>

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
              <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit</button>
              </form>
            </td>
            <td >
              <form action="{{ route('product.destroy', ['id' => $product->id]) }}" method="POST">
                  @csrf
                  <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
              </form>
            </td>
          </tr>
      </tbody>

    @endforeach

  </table>    
<a href="{{route('product.create')}}" class="text-blue-600 visited:text-purple-600 ">Ajouter un produit</a> 


</x-app-layout>
