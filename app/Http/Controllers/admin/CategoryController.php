<?php

namespace App\Http\Controllers\admin;


use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{   
    // basic CRUD functions
    public function index()
    {   
        $category = Category::all();
        return view('admin.categories.index', compact('category'));
    }

    public function add()
    {
        return view(('admin.categories.add'));
    }

    public function insert(Request $request)
    {
        $category = new Category();
        $category->name = $request->input('name');
        $category->meta_title = $request->input('meta_title');
        $category->meta_description = $request->input('meta_description');
        $category->meta_keywords = $request->input('meta_keywords');
        $category->save();
        return redirect('categories')->with('status',"category Added Successfully");
        
    }

    //edit category function 
    public function edit($id)
    {    
        //check for the corresponding ID and send that category to the edit template.
        $category = Category::find($id);
         return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->name = $request->input('name');
        $category->meta_title = $request->input('meta_title');
        $category->meta_description = $request->input('meta_description');
        $category->meta_keywords = $request->input('meta_keywords');
        $category->update();
        return redirect('categories')->with('status',"category Added Successfully");
        
    }

    // delete category function

    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('categories')->with('status',"Category deleted Successfully");
    }
}
