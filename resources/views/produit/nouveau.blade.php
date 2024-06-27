<x-app-layout>

    <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Dashboard') }}
      </h2>
    </x-slot>
<h2 class="flex items-center text-5xl font-extrabold dark:text-white">Ajouter un produit</h2>
<br>
    <form action="{{ route('product.store')  }}" method="POST">
        @csrf
        <div class="col-span-full">
            <label for="name">Nom</label>
            <input type="text" name="name" id="name" class="" required>
        
        <div class="col-span-full">
            <label for="description">Description</label>
            <input type="text" name="description" id="description" required>
        </div>
        <div class="col-span-full">
            <label for="price" class="lock text-sm font-medium leading-6 text-gray-900">Prix</label>
            <input type="text" name="price" id="price" required>
        </div>
        <input type="hidden" name="status" value='0'>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Ajouter</button>
    </form>
</x-app-layout>