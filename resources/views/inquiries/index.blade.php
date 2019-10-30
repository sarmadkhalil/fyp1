@extends('layouts.master')

@section('content')
<div class="mt-4">
    <h3>All inquiries</h3>
    <div class="card">
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Description</th>
                      <th>Customer</th>
                      <th>Product<th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($inquiries as $inquiries)
                    <tr>
                      <td>{{$inquiries->id}}</td>
                      <td>{{$inquiries->name}}</td>
                      <td>{{$inquiries->description}}</td>
                      <td>{{@$inquiries->customer->name}}</td>
                      <td>{{@$inquiries->products->name}}</td>
                      <td>
                      <a href="{{ route('inquiries.show',$inquiries->id)}}" class="btn btn-primary">Show</a>
                      <?php
                      $user = Auth::user()->user_type;
                      if($user == 'admin'){?>/
                      <a href="{{ route('salesquotes.index')}}" class="btn btn-primary">Quote</a>
                      /
                      <a href="{{ route('inquiries.edit',$inquiries->id)}}" class="btn btn-primary">Edit</a>
                      /<?php }?>
                      <form action="{{ route('inquiries.destroy', $inquiries->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
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
        <form action="{{route('inquiries.store')}}" method="post">
        {{csrf_field()}}
        <div class="modal-body">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" name="description" id="description">
            </div>
            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="text" class="form-control" name="quantity" id="quantity">
            </div>
            <div class="form-group">
            <label for="customer_id">Customer</label>
            <select name="customer_id" id="customer_id" class="form-control">
            @foreach($customers as $customer)
              <option value="{{ $customer->id }}">{{ $customer->name }}</option>
            @endforeach
            </select>
            </div>
            <div class="form-group">
            <label for="product_id">Product</label>
            <select name="product_id" id="product_id" class="form-control">
            @foreach($products as $product)
              <option value="{{ $product->id }}">{{ $product->name }}</option>
            @endforeach
            </select>
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