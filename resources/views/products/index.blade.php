@extends('layouts.master')

@section('content')
<div class="mt-4">
{{csrf_field()}}
    <h3>All Products</h3>

    <div class="card">
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Description</th>
                      <th>Cost</th>
                      <th>Supplier</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($products as $products)
                    <tr>
                      <td>{{$products->id}}</td>
                      <td>{{$products->name}}</td>
                      <td>{{$products->description}}</td>
                      <td>{{$products->costperprod}}</td>
                      <td>{{$products->supplier->name}}</td>
                      <td>
                      <a href="{{ route('products.show',$products->id)}}" class="btn btn-primary">Show</a>
                      <?php
                      $user = Auth::user()->user_type;
                      if($user == 'admin'){?>/
                      <a href="{{ route('products.edit',$products->id)}}" class="btn btn-primary">Edit</a>
                      /
                      <form action="{{ route('products.destroy', $products->id)}}" method="post">
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
            <h5 class="modal-title" id="exampleModalLabel">Add new Product</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="{{route('products.store')}}" method="post">
        {{csrf_field()}}
        <div class="modal-body">
            @include('products.form')
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
            <a href="{{ URL::route('suppliers.index') }}" class="btn btn-default"> New Supplier </a>
        </div>
        </form>
        </div>
    </div>
    </div>
</div>
@endsection