<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Variant;

class VariantController extends Controller
{
    public function index()
    {
        $variants = Variant::all();
        return view('admin.variants.index', compact('variants') );

    }
    public function add()

    {   $product = Product::all();
        return view('admin.variants.add', compact('product'));
    }

    public function insert(Request $request)
    {
        $variants = new Variant();
        $variants-> product_id = $request->input('product_id');
        $variants-> name = $request->input('name');
        $variants-> sap_product_code = $request->input('sap_product_code');
        $variants-> web_product_code = $request->input('web_product_code');
        $variants->save();
        return redirect('variants')->with('status',"Product Variant added Successfully");
    }


    public function edit($id)
    {
        $variants = Variant::find($id);
        return view('admin.variants.edit', compact('variants'));
    }
    
    public function update(Request $request, $id )
    {
       $variants = Variant::find($id);
       $variants-> name = $request->input('name');
       $variants-> sap_product_code = $request->input('sap_product_code');
       $variants-> web_product_code = $request->input('web_product_code');
       $variants->update();
       return redirect('variants')->with('status',"Product Variant updated Successfully");
    }

    public function delete($id)
    {
        $variants = Variant::find($id);
        $variants->delete();
        return redirect('variants')->with('status',"Product variant deleted Successfully");
    }
}
