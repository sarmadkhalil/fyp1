@extends('layouts.master')

@section('content')
<<<<<<< HEAD
<div class="container">
<div class="row home">
                            <div class="col-12 col-sm-4 mx-auto">
                                <div class="card">
                                    <div class="textTitle prodcolor card-header"><a href=" {{ URL::to('products') }}"><i class="fas fa-box-open"></i> Products</div></a>
                                    <div class="card-body">
                                        <?php 
                                        use App\Product;
                                        $product = Product::count();
                                        echo $product;
                                        ?>
                                    </div>
                                </div>
                            </div>
                           <div class="col-12 col-sm-4 mx-auto">
                                <div class="card">
                                    <div class="textTitle suppcolor card-header"><a href=" {{ URL::to('suppliers') }}"><i class="fas fa-truck-moving"></i> Suppliers</div></a>
                                    <div class="card-body">
                                    <?php
                                        use App\Supplier; 
                                        $supplier = Supplier::count();
                                        echo $supplier;
                                    ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4 mx-auto">
                                <div class="card">
                                    <div class="textTitle ordcolor card-header"><a href=" {{ URL::to('orders') }}"><i class="fas fa-shopping-cart"></i>Inquiries</div></a>
                                    <div class="card-body">
                                    <?php
                                        use App\Inquiry; 
                                        $inquiry = Inquiry::count();
                                        echo $inquiry;
                                    ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-4 mx-auto">
                                <div class="card">
                                    <div class="textTitle repcolor card-header"><i class="fas fa-chart-line"></i> Users</div>
                                    <div class="card-body">
                                    <?php
                                        use App\User; 
                                        $user = User::count();
                                        echo $user;
                                    ?>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-12 col-sm-4 mx-auto">
                                <div class="card">
                                    <div class="textTitle repcolor card-header"><i class="fas fa-chart-line"></i> Sales Quotes</div>
                                    <div class="card-body">
                                    <?php
                                        use App\Salesquote; 
                                        $salesquote = Salesquote::count();
                                        echo $salesquote;
                                    ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
</div>
=======
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div> -->
<div class="container-fluid">
        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>

                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the card's
                  content.
                </p>

                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
              </div>
            </div>

            <div class="card card-primary card-outline">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>

                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the card's
                  content.
                </p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
              </div>
            </div>
            
          </div>
    
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h5 class="m-0">Featured</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Special title treatment</h6>

                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>

            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Featured</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Special title treatment</h6>

                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          
        </div>
      </div>
>>>>>>> 034f624a8f90e69bcb845dd7deb2a2130fe5410f
@endsection
