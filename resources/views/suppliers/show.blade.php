@extends('layouts.master')
@section('content')
<div class="mt-3">
<div class="card card-widget widget-user">
    <!-- Add the bg color to the header using any of the bg-* classes -->
    <div class="widget-user-header bg-info-active">
    <h3 class="widget-user-username">{{$suppliers->name}}</h3>
    <h5 class="widget-user-desc">Founder &amp; CEO</h5>
    </div>
    <div class="widget-user-image">
    <img class="img-circle elevation-2" src="../img/rocket.png" alt="User Avatar">
    </div>
    <div class="card-footer">
    <div class="row">
        <div class="col-sm-4 border-right">
        <div class="description-block">
            <h5 class="description-header">{{$suppliers->id}}</h5>
            <span class="description-text">Index number</span>
        </div>
        <!-- /.description-block -->
        </div>
        <!-- /.col -->
        <div class="col-sm-4 border-right">
        <div class="description-block">
            <h5 class="description-header">{{$suppliers->address}}</h5>
            <span class="description-text">Address</span>
        </div>
        <!-- /.description-block -->
        </div>
        <!-- /.col -->
        <div class="col-sm-4">
        <div class="description-block">
            <h5 class="description-header">{{$suppliers->PNumber}}</h5>
            <span class="description-text">Phone Number</span>
        </div>
        </div>
        <!-- /.description-block -->
        </div>

    <div class="row">
    <div class="col-sm-4 border-right">
    <button href="{{ url('suppliers') }}" class="col-3 btn btn-primary">Back</button>
    <button href="{{ route('suppliers.edit',$suppliers->id)}}" class="col-3 btn btn-primary">Edit</button>
    <form action="{{ route('suppliers.destroy', $suppliers->id)}}" method="post">
    @csrf
    @method('DELETE')</div>
    <button class="col-3 btn btn-danger" type="submit">Delete</button>
    </div>
    <!-- /.row -->
    </div>
</form>
@foreach($suppliers->products as $products)
<div class="card">
  <div class="card-header">
  Products
  </div>
  <div class="card-body">
    <h5 class="card-title">{{$products->id}}. {{$products->name}}</h5>
    <p class="card-text">{{$products->description}}</p>
    <a href="{{ route('products.show',$products->id)}}" class="btn btn-primary">More information</a>
  </div>
</div>
    @endforeach
</div>
</div>
@endsection