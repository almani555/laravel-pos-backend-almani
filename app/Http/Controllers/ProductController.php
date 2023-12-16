<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(Request $request){
        //get data products
        //$products = \App\Models\Product::paginate(10);
        $products = DB::table('products')
            ->when($request->input('name'), function ($query, $name) {
                return $query->where('name', 'like', '%' . $name . '%');
            })
            ->orderBy('id', 'desc')
            ->paginate(10);
        return view('pages.products.index', compact('products'));
    }
    public function create(){
        return view('pages.products.create');
    }
    public function store(StoreProductRequest $request){
        $data = $request->all();
        \App\Models\Product::create($data);
        return redirect()->route('product.index')->with('success', 'Product successfully created');
    }

    public function edit($id)
    {
        $product = \App\Models\Product::findOrFail($id);
        return view('pages.products.edit', compact('product'));
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
        $data = $request->validated();
        $product->update($data);
        return redirect()->route('product.index')->with('success', 'Product successfully updated');
    }

    public function destroy(Product $product){
        $product->delete();
        return redirect()->route('product.index')->with('success', 'Product successfully deleted');
    }

}
