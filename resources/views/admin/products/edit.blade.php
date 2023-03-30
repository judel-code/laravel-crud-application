@extends('layouts.admin')
@section('content')
    <div class="card col-md-6">
        <div class="card-header">
            <h4>Add Product</h4>
        </div>
        <div class="card-body">
                <form action="{{ url('update-product/'.$products->id) }}" method="POST" enctype="multipart/form-data ">
                    @csrf
                    @method('PUT')
                    <div class="row">

                        <div class="col-md-12 mb-3">

                            <label for="">Select a Category</label>
                            <select class="form-control mt-4">
                                <option value="">{{ $products->category->name }}</option>
                              </select>
                        </div>
                        <div class="col-md-12">  
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name" value="{{$products->name}}"> 
                            </div>
                        <div class="col-md-12">
                            <label for="">Slug</label>
                            <input type="text" class="form-control" name="slug" value="{{$products->slug}}"> 
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                        
                </form>
        </div>
    </div>
    
@endsection