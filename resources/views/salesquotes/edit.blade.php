@extends('layouts.master')

@section('content')
<div class="mt-4 px-3 pb-3">
<h3>Edit {{$salesquotes->id}}</h3>
<form action="{{ route('salesquotes.update', $salesquotes->id) }}" method="post">
@method('PATCH')
@csrf
<?php
                      $user = Auth::user()->type;
                      if($user == 'admin'){?>
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name" id="name" value = {{$salesquotes->name}}>
</div>
<div class="form-group">
    <label for="description">Description</label>
    <input type="text" class="form-control" name="description" id="description" value={{$salesquotes->description}}>
</div>
<div class="form-group">
    <label for="total">Cost</label>
    <input type="text" class="form-control" name="total" id="total" value={{$salesquotes->total}}>
</div>
<div class="form group">
<label for="status">Status</label>
<select name="status" id="status" class="form-control">
        <option value="pending">pending</option>
        <option value="pending">negotiating</option>
        <option value="pending">complete</option>
</select>
</div>
<div class="form-group">
    <label for="total">Product ID</label>
    <input type="text" class="form-control" name="product_id" id="product_id" value={{$salesquotes->product_id}}>
</div>
<div class="form-group">
    <label for="total">Customer ID</label>
    <input type="text" class="form-control" name="customer_id" id="customer_id" value={{$salesquotes->customer_id}}>
</div>
<button type="submit" class="btn btn-primary">Update</button>
</form>
</div>
                      <?php }
                      else{?>
<h1>ADMIN ONLY<h1>
                    <?php  }?>
@endsection