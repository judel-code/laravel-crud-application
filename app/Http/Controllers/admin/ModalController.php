<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Variant;
use Illuminate\Http\Request;

class ModalController extends Controller
{
    
    // // filter by category
    public function view($id)
    {   
        if(Category::where('id', $id)->exists()){
            $category = Category::where('id', $id)->first();
            $products = Product::where('category_id', $id)->get();
            return view('modals.productModal', compact('category', 'products'));
        }
        else{
            return redirect('products')->with('status','Category does not exist');
        }

       
    }

    // filter by product 
    public function view_variant($id)
    {   
        if(Product::where('id', $id)->exists()){
            $product = Product::where('id', $id)->first();
            $variants = Variant::where('product_id', $id)->get();
            return view('modals.variantModal', compact('product', 'variants'));
        }
        else{
            return redirect('variants')->with('status','Variants does not exist');
        }

       
    }

  
    
}
