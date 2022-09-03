<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index():\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $products = Product::all();
        $categories = Category::all();
        return view('product.index',[
            'products' => $products,
            'categories' => $categories
        ]);
    }
    public function store(Request $request){
        $product = new Product();

        $request->validate([
            'product_name' => 'required',
            'product_price' => 'required',
            'product_image' => 'required',
            'category_id' => 'required',
        ]);

        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->product_image = $request->product_image;
        $product->category_id = $request->category_id;
        $product->save();

        return redirect()->route('products.index');
    }

    public function update(Request $request, $id): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'product_name' => 'required',
            'product_price' => 'required',
            'product_image' => 'required',
            'category_id' => 'required',
        ]);

        $product = Product::find($id);

        $product->product_name = $request->get('product_name');
        $product->product_price = $request->get('product_price');
        $product->product_image = $request->get('product_image');
        $product->category_id = $request->get('category_id');


        $product->save();

        return redirect()->route('products.index');



    }

    public function destroy(Product $product): \Illuminate\Http\RedirectResponse
    {
        $product->delete();

        return redirect()->route('products.index');

    }
}
