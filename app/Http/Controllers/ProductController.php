<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Product;
use App\Produit;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *

     */
    public function index()
    {

//        $produits = Product::select('productName', 'price')->latest()->get();

        $categorie = Categorie::find(1);
        $produits = $categorie->products;

        return view('catalogue', ['produits' => $produits]);

    }


    /**
     * Display a  resource.
     *

     */
    public function show($id)
    {
        $produit = Product::select('productName', 'price')->where('productName', [$id])->first();


        return view('produit', ['produit' => $produit]);
    }

    public function create()
    {
        return view('add-product');
    }

    public function store(Request $request)
    {

        request()->validate([
            'productName'=>['required',],
            'price'=>['required', 'numeric', 'gt:0'],
        ]);


        $product = new Product();
        $product->productName = $request->input('productName');
        $product->price = $request->input('price');

        $product->save();
        return redirect('catalogue')->with('status', 'Product added!');
    }

    public function edit($id)
    {

        $produit = Product::select('productName', 'price')->where('productName', [$id])->first();


        return view('edit-product', ['produit' => $produit]);
    }

    public function update(Request $request, $id)
    {
        request()->validate([
            'productName'=>['required',],
            'price'=>['required', 'numeric', 'gt:0'],
        ]);

        $produit = Product::Where('productName', [$id])->first();

        $produit->productName = $request->input('productName');
        $produit->price = $request->input('price');

        $produit->save();
        return redirect('catalogue')->with('status', 'Product updated!');

    }

    public function destroy($id)
    {
        $produit = Product::Where('productName', [$id])->first();
        $produit->delete();
        return redirect('catalogue')->with('status', 'Product deleted!');
    }
}
