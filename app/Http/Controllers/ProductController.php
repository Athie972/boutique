<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products= Product::all();
        return view('produit.produits', [
            'products'=> $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $product = Product::all();
            return  view('produit.nouveau', compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // valider longueur des données
        $validatedData = $request->validate([
            'name' => 'required|string|min:3',
            'description' => 'required|string|min:6',
            'price' => 'required|string|min:2',
        ]);
        // créer un produit
        Product::create($request->all());
        
        // redirection vers la page
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        
        // $product = Product::findOrFail();
        //     return  view('produit.details', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
            return  view('produit.modifier', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|min:3',
            'description' => 'required|string|min:6',
            'price' => 'required|string|min:2',
        ]);

        // modifier
        $product = Product::findOrFail($id);
         $product->update($validatedData);

        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('product.index');
    }
}
