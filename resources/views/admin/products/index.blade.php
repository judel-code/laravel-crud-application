@extends('layouts.admin')
 

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Product Page</h4> 
            
        </div>
        <div class="card-body">
           <table class="table table-bordered table-striped">
             <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>category</th>
                    <th>Action</th>
                </tr>
             </thead>
             <tbody>
                @foreach ( $products as $row)
                <tr>
                    <td> {{$row->id}}</td>
                    <td> {{$row->name}}</td>
                    <td> {{$row->slug}}</td>
                    <td> @if ($row->category) {{$row->category->name}} @endif</td>
                    <td> 
                        
                        <a href="{{ url('view-variant/'.$row->id) }}" class="btn btn-primary">View Variant</a>
                        <a href="{{ url('edit-product/'.$row->id) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ url('delete-product/'.$row->id) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr> 
                @endforeach
             </tbody>
           </table>
        </div>
    </div>
@endsection


