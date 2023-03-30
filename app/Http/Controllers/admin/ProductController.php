<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {   
        //pulling all the product data from the database
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    public function add()
    {   
        $category = Category::all();
        return view('admin.products.add', compact('category'));
    }

    public function insert(Request $request)
    {
        $products = new Product();
        $products-> category_id = $request->input('category_id');

        // $selectedCategories = $request->input('category_id', []);
        // $categoryIds = implode(',', $selectedCategories);
        // $products->category_id = $categoryIds;

        $products-> name = $request->input('name');
        $products-> slug = $request->input('slug');
        $products->save();
        return redirect('products')->with('status',"Product added Successfully");
    }

    public function edit($id)
    {
       $products = Product::find($id);
       return view('admin.products.edit', compact('products'));
    }

    public function update(Request $request, $id)
    {
        $products = Product::find($id);
        $products-> name = $request->input('name');
        $products-> slug = $request->input('slug');
        $products->Update();
        return redirect('products')->with('status',"Product updated Successfully");
    }

    // delete function
    public function delete($id)
    {
       $product = Product::find($id); 
       $product->delete();
       return redirect('products')->with('status',"Product deleted Successfully");
    }

    
}
