

@extends('layouts.admin')
@section('content')
    <div class="card col-md-6">
        <div class="card-header">
            <h4>Add category</h4>
        </div>
        <div class="card-body">
                <form action="{{ url('insert-category') }}" method="POST">
                    @csrf
                        <div class="col-md-12">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name"> 
                        </div>
                        <div class="col-md-12">
                            <label for="">Meta Title</label>
                            <input type="text" class="form-control" name="meta_title"> 
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <label for="">Meta Description</label>
                                <textarea name="meta_description" rows="3" class="form-control" ></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <label for="">Meta Keywords</label>
                                <textarea name="meta_keywords" rows="3" class="form-control" ></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                </form>
        </div>
    </div>
@endsection

