@extends('layouts.admin')

<!-- Modal -->
<div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="userListModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="userListModalLabel">{{ $product->name}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="window.location.href='{{ url('products') }}'">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
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
                                 <a class="btn btn-primary" href="{{ url('view-product/'.$row->id)}}">Back</a>
                             </td>
                         </tr> 
                         @endforeach
                      </tbody>
                    </table>
                 </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="window.location.href='{{ url('products') }}'">Back</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href='{{ url('products') }}'">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Include jQuery library -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- JavaScript code to show modal on page load -->
<script>
    $(document).ready(function() {
        $('#productModal').modal('show');
    });
</script>