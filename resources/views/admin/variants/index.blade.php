@extends('layouts.admin')
 

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Product Variant Page</h4> 
            
        </div>
        <div class="card-body">
           <table class="table table-bordered table-striped">
             <thead>
                <tr>
                    <th>Id</th>
                    <th>Product</th>
                    <th>Sap Product Code</th>
                    <th>Web Product Code</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
             </thead>
             <tbody>
                @foreach ( $variants as $row)
                <tr>
                    <td> {{$row->id}}</td>
                    <td> @if ($row->product) {{$row->product->name}} @endif</td>
                    <td> {{$row->sap_product_code}}</td>
                    <td> {{$row->web_product_code}}</td>
                    <td> {{$row->name}}</td>
                    <td> 
                        <a href="{{ url('edit-variant/'.$row->id) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ url('delete-variant/'.$row->id) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr> 
                @endforeach
             </tbody>
           </table>
        </div>
    </div>
@endsection

