@extends('layouts.admin')
@section('content')
    <div class="card col-md-6">
        <div class="card-header">
            <h4>Edit Product Variant</h4>
        </div>
        <div class="card-body">
                <form action="{{ url('update-variant/'.$variants->id) }}" method="POST" enctype="multipart/form-data ">
                    @csrf
                    @method('PUT')
                    <div class="row">

                        <div class="col-md-12 mb-3">

                            <label for="">Select a Product</label>
                            <select class="form-control mt-4 ">
                                <option value="">{{ $variants->product->name }}</option> 
                              </select>
                        </div>
                        <div class="col-md-12">  
                            <label for="">Sap Product Code</label>
                            <input type="text" class="form-control" value="{{ $variants->sap_product_code }}" name="sap_product_code"> 
                            </div>
                        <div class="col-md-12">
                            <label for="">Web Product Code</label>
                            <input type="text" class="form-control" value="{{ $variants->web_product_code }}" name="web_product_code"> 
                        </div>
                        <div class="col-md-12">
                            <label for="">Name</label>
                            <input type="text" class="form-control" value="{{ $variants->name }}" name="name"> 
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>

                    </div>
                        
                </form>
        </div>
    </div>
    
@endsection

