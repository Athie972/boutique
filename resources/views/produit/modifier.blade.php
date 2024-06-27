<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard') }}
    </h2>
  </x-slot>
<div id="modifcontainer">
<h2 class="uppercase">Modifier un produit</h2>
<br>
<form action="{{ route('product.update', ['id' => $product->id]) }}" method="POST">
    @csrf
    <div class="mb-6">
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nom</label>
        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="{{$product->name}}" required>
    </div>
    <br>
    <div class="mb-6">
        <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Description</label>
        <input type="text" name="description" id="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="{{$product->description}}" required>
    </div>
    <br>
    <div class="mb-6">
        <label for="price" class="block mb-2 text-sm font-medium text-gray-900">Prix</label>
        <input type="text" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="{{$product->price}}" required>
    </div>
    <br>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Modifier</button>
</form>
</div>
</x-app-layout>
