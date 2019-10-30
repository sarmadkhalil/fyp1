@extends('layouts.master')

@section('content')
<div class="mt-4">
    <h3>All Order</h3>
    <div class="card">
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Order description</th>
                      <th>Order Cost</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($salesquotes as $salesquotes)
                    <tr>
                      <td>{{$salesquotes->id}}</td>
                      <td>{{$salesquotes->description}}</td>
                      <td>{{$salesquotes->total}}</td>
                      <td>{{$salesquotes->status}}</td>
                      <td>
                      
                      <a href="{{ route('salesquotes.show',$salesquotes->id)}}" class="btn btn-primary">Show</a>
                      /  
                     
                      <a href="{{ route('salesquotes.edit',$salesquotes->id)}}" class="btn btn-primary">Edit</a>
                      /
                      <form action="{{ route('salesquotes.destroy', $salesquotes->id)}}" method="post">
                      
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
    </div>
</div>
@endsection