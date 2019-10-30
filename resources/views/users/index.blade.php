@extends('layouts.master')

@section('content')
<div class="mt-4">
    <h3>All Users</h3>
    <div class="card">
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Bio</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($users as $users)
                    <tr>
                      <td>{{$users->id}}</td>
                      <td>{{$users->name}}</td>
                      <td>{{$users->email}}</td>
                      <td>{{$users->bio}}</td>
                      <td>
                      <a href="{{ route('users.show',$users->id)}}" class="btn btn-primary">Show</a>
                      /
                      <a href="{{ route('users.edit',$users->id)}}" class="btn btn-primary">Edit</a>
                      /
                      <form action="{{ route('users.destroy', $users->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form></td>
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
        <form action="{{route('users.store')}}" method="post">
        {{csrf_field()}}
        <div class="modal-body">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form" name="name" id="name">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="bio">bio</label>
                <input type="text" class="form" name="bio" id="bio">
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <select name="type" id="type">
                    <option value="user">employee</option>
                    <option value="manager">manager</option>
                    <option value="admin">admin</option>
                </select>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password">
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