<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Category;
use Illuminate\Http\Request;

class productsController extends Controller
{
    public function index(){

        $products = Products::all();
        $categories = Category::all();

       /*  foreach($products as $product){
            $product->active = $product->active == 1 ? 'Attivo' : 'Inattivo';
        } */
        return view('products.index',[ //passo alla view products.index(ex pages/products) sia i prodotti attivi che gli inattivi
            'products' => $products,
            'categories' => $categories
        ]);
    }

    public function create(){

        $products = Products::all();
        $categories = Category::all();
        $product = new Products();

        return view('products.create',[ //passo alla view products.index(ex pages/products) sia i prodotti attivi che gli inattivi
            'products' => $products,
            'product' => $product,
            'categories' => $categories
        ]);
    }

    public function store(){

        $data = request()->validate([
            'name'=>'required|min:5',
            'description'=>'required|min:10',
            'active'=>'required',
            'category_id'=>'required'
        ]);
        Products::create($data);

       /*  $product = new Products();
        $product->name = request('name');
        $product->description = request('description');
        $product->active = request('active');

        $product->save(); */

        return redirect()->route('products.index');
    }


    public function show(Products $product){

      /*   return view('products.show',[ //passo alla view products.index(ex pages/products) sia i prodotti attivi che gli inattivi
            'product' => $product,
        ]); */
        dd($product->id);

    }
    public function edit(Products $product){

        $categories = Category::all();


        return view('products.edit',[ //passo alla view products.index(ex pages/products) sia i prodotti attivi che gli inattivi
            'product' => $product,
            'categories' => $categories,
        ]);

    }
    public function update(Products $product){
        $data = request()->validate([
            'name'=>'required|min:5',
            'description'=>'required|min:10',
            'active'=>'required',
            'category_id'=>'required'
        ]);

        $product->update($data);
        return redirect()->route('products.show', $product);

    }

    public function destroy(Products $product){
        $product->delete();
        return redirect()->route('products.index');
    }
}
