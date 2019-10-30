@extends('layouts.master')

@section('content')
<div class="mt-4">
{{csrf_field()}}
    <h3>All Suppliers</h3>

    <div class="card">
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Address</th>
                      <th>Phone Number</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($suppliers as $suppliers)
                    <tr>
                      <td>{{$suppliers->id}}</td>
                      <td>{{$suppliers->name}}</td>
                      <td>{{$suppliers->address}}</td>
                      <td>{{$suppliers->PNumber}}</td>
                      <td>
                      <a href="{{ route('suppliers.show',$suppliers->id)}}" class="btn btn-primary">Show</a>
                      <?php
                      $user = Auth::user()->user_type;
                      if($user == 'admin'){?>/
                      <a href="{{ route('suppliers.edit',$suppliers->id)}}" class="btn btn-primary">Edit</a>
                      /
                      <form action="{{ route('suppliers.destroy', $suppliers->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                      </form><?php }?></td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

            <div class="col-sm-12">
                @if(session()->get('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}  
                </div>
                @endif
            </div>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Add new
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add new Supplier</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="{{route('suppliers.store')}}" method="post">
        {{csrf_field()}}
        <div class="modal-body">
            @include('suppliers.form')
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
        </form>
        </div>
    </div>
    </div>
</div>
@endsection