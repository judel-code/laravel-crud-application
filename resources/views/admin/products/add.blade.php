@extends('layouts.admin')
@section('content')
    <div class="card col-md-6">
        <div class="card-header">
            <h4>Add Product</h4>
        </div>
        <div class="card-body">
                <form action="{{ url('insert-product') }}" method="POST" enctype="multipart/form-data ">
                    @csrf
                    <div class="row">

                        <div class="col-md-12 mb-3">

                            <label for="">Select a Category</label>
                            <select class="form-control mt-4 selectpicker" name="category_id" aria-label="Default select example"  data-live-search="true">
                                 @foreach ( $category as $row )
                                 <option value="{{ $row->id }}">{{ $row->name }}</option> 
                                 {{-- <option value="{{ $row->id }}" {{ (in_array($row->id)->to()) }}>{{ $row->name }}</option>  --}}
                                 @endforeach
                              </select>
                        </div>
                        <div class="col-md-12">  
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name"> 
                            </div>
                        <div class="col-md-12">
                            <label for="">Slug</label>
                            <input type="text" class="form-control" name="slug"> 
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>

                    </div>
                        
                </form>
        </div>
    </div>
    
@endsection

