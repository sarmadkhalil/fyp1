@extends('layouts.master')

@section('content')
<div class="card">
        <div class="card-header">
          <h3 class="card-title">Projects Detail</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
              <div class="row">
                <div class="col-12 col-sm-12">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Quantity</span>
                      <span class="info-box-number text-center text-muted mb-0">{{$inquiries->quantity}}</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <h4>Customer</h4>
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="../img/customer-support.png" alt="user image">
                        <span class="username">
                          <a href="#">{{$inquiries->customer->name}}</a>
                        </span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        Email: {{$inquiries->customer->email}}<br>
                        Address: {{$inquiries->customer->address}}<br>
                        Phone Number: {{$inquiries->customer->PNumber}}
                      </p>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
              <h3 class="text-primary"></i>Inquiry About</h3>
              @foreach($inquiries->product as $products)
              <p class="text-muted">{{$products->name}}<br>
              Cost: {{$products->costperprod}}
              <br>
              <div class="text-muted">
                <p class="text-sm">Supplier
                  <b class="d-block">{{$products->supplier->name}}</b>
                </p>
              </div>
              @endforeach
              <br>
              <div class="text-muted">
                <p class="text-sm">Description
                  <b class="d-block">{{$inquiries->description}}</b>
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
@endsection