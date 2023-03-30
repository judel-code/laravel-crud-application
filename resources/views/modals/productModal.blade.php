
@extends('layouts.admin')

<!-- Modal -->
<div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="userListModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="userListModalLabel">{{ $category->name}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="window.location.href='{{ url('categories') }}'">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
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
                                 
                                 <a href="{{ url('view-variant/'.$row->id) }}" class="btn btn-primary">View Variants</a>
                                 <a href="{{ url('edit-product/'.$row->id) }}" class="btn btn-primary">Edit</a>
                                 <a href="{{ url('delete-product/'.$row->id) }}" class="btn btn-danger">Delete</a>
                             </td>
                         </tr> 
                         @endforeach
                      </tbody>
                    </table>
                 </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="window.location.href='{{ url('categories') }}'">Back</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href='{{ url('categories') }}'">Close</button>
                
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