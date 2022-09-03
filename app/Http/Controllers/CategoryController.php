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

//    public function edit(Category $category)
//    {
//        return view('categories.edit',compact('category'));
//    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'category_name' => 'required',
        ]);

        $category = Category::find($id);

        $category->category_name = $request->get('category_name');

        $category->save();

        return redirect()->route('categories.index');



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
