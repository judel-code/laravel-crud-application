
@extends('layouts.admin')
@section('content')
    <div class="card col-md-6">
        <div class="card-header">
            <h4> Edit category</h4>
        </div>
        <div class="card-body">
                <form action="{{ url('update-category/'.$category->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                        <div class="col-md-12">
                        <label for="">Name</label>
                        <input type="text" value="{{ $category->name }}" class="form-control" name="name"> 
                        </div>
                        <div class="col-md-12">
                            <label for="">Meta Title</label>
                            <input type="text"  value="{{ $category->meta_title}}" class="form-control" name="meta_title"> 
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <label for="">Meta Description</label>
                                <textarea  name="meta_description" rows="3" class="form-control" >{{ $category->meta_description}}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <label for="">Meta Keywords</label>
                                <textarea  name="meta_keywords" rows="3" class="form-control" >{{ $category->meta_keywords}}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                </form>
        </div>
    </div>
@endsection

