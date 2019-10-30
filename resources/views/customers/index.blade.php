@extends('layouts.master')

@section('content')
<div class="mt-4">
    <h3>All customers</h3>
    <div class="card">
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Address</th>
                      <th>Phone<th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($customers as $customers)
                    <tr>
                      <td>{{$customers->id}}</td>
                      <td>{{$customers->name}}</td>
                      <td>{{$customers->email}}</td>
                      <td>{{$customers->address}}</td>
                      <td>{{$customers->PNumber}}</td>
                      <td>
                      <?php
                      $user = Auth::user()->user_type;
                      if($user == 'admin'){?><a href="{{ route('customers.edit',$customers->id)}}" class="btn btn-primary">Edit</a>
                      /
                      <form action="{{ route('customers.destroy', $customers->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
</form><?php }?>
                </td>
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
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="{{route('customers.store')}}" method="post">
        {{csrf_field()}}
        <div class="modal-body">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" name="address" id="address">
            </div>
            <div class="form-group">
                <label for="PNumber">Phone</label>
                <input type="text" class="form-control" name="PNumber" id="PNumber">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
        </form>
        </div>
    </div>
    </div>
</div>
@endsection