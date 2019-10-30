@extends('layouts.master')

@section('content')
<div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-7">
              <div class="col-12 align-middle">
                <img src="../img/bottlecaps.jpg" class="product-image img-thumbnail" alt="Product Image">
              </div>
            </div>
            <div class="col-12 col-sm-5">
              <div class="card">
              <div class="m-3"><h2>Product name: </h2><h3 class="my-3">{{$products->name}}</h3></div></div>
              <hr>
              <div class="card">
              <div class="m-3"><h2>Description:</h2><h3>{{$products->description}}</h3></div></div>
              <hr>
              <div class="card">
              <div class="m-3"><h2>Supplier:</h2><h3>{{$products->supplier->id}}. {{$products->supplier->name}}</h3></div></div>
              <hr>

              <div class="bg-gray py-2 px-3 mt-4">
                <h2 class="mb-0">
                <h3>Price: </h3>$ {{$products->costperprod}}
                </h2>

              <div class="mt-4 product-share">
                

            </div>
          </div>
          </div>
          </div>
          </div>
        <!-- /.card-body -->
      </div>
@endsection