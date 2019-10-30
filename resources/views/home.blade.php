@extends('layouts.master')

@section('content')
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
@endsection
