@extends('layouts.admin')
 

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Category Page</h4> 
            
        </div>
        <div class="card-body">
           <table class="table table-bordered table-striped">
             <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Meta Title</th>
                    <th>Meta Description</th>
                    <th>Meta Keywords</th>
                    <th>Action</th>
                </tr>
             </thead>
             <tbody>
                @foreach ( $category as $row)
                <tr>
                    <td> {{$row->id}}</td>
                    <td> {{$row->name}}</td>
                    <td> {{$row->meta_title}}</td>
                    <td> {{$row->meta_description}}</td>
                    <td> {{$row->meta_keywords}}</td>
                    <td> 
                        
                        <a href="{{ url('view-category/'.$row->id) }}" class="btn btn-primary">View Products</a>
                        <a href="{{ url('edit-category/'.$row->id) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ url('delete-category/'.$row->id) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr> 
                @endforeach
             </tbody>
           </table>
        </div>
    </div>
@endsection



