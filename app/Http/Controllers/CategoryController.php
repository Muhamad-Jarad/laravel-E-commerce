<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $categories = Category::all();
        return view('category.index',[
            'categories'=>$categories
        ]);

//        $data = User::all();
//        //$data = login::orderBy('created_at', 'desc')->get();
//        return view('AdminPanel', ['data' => $data]);
    }
    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required',
        ]);

        $category = new Category();

        $category->category_name = $request->category_name;


        $category->save();


        return redirect()->route('categories.index')
            ->with('success','category has been created successfully.');

//        $category = Category::create($request->all());
//        return redirect()->route('categories.index')
//            ->with('success','product added successflly') ;
    }

//    public function show(Category $category)
//    {
//        return view('categories.index',compact('category'));
//    }

    public function edit(Category $category)
    {
        return view('categories.edit',compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'category_name' => 'required',
        ]);

        $category = Category::find($id);

        $category->category_name = $request->get('category_name');

        $category->save();

        return redirect()->route('categories.index');

        // Validation for required fields (and using some regex to validate our numeric value)
//        $request->validate([
//            'stock_name'=>'required',
//            'ticket'=>'required',
//            'value'=>'required|max:10|regex:/^-?[0-9]+(?:\.[0-9]{1,2})?$/'
//        ]);
//        $stock = Stock::find($id);
//        // Getting values from the blade template form
//        $stock->stock_name =  $request->get('stock_name');
//        $stock->ticket = $request->get('ticket');
//        $stock->value = $request->get('value');
//        $stock->save();
//
//        return redirect('/stocks')->with('success', 'Stock updated.');

    }

    public function destroy(Category $category): \Illuminate\Http\RedirectResponse
    {
        $category->delete();

        return redirect()->route('categories.index');

    }

//    public function softDelete($id)
//    {
//
//        $product = Product::find($id)->delete();
//
//        return redirect()->route('products.index')
//            ->with('success','product deleted successflly') ;
//    }
}
