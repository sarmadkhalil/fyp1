@extends('layouts.master')

@section('content')
<div class="mt-4">
<h3>Edit Inquiry</h3>
<form action="{{ route('inquiries.update', $inquiries->id) }}" method="post">
@method('PATCH')
@csrf
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name" id="name" value={{ $inquiries->name }}>
</div>
<div class="form-group">
    <label for="description">Description</label>
    <input type="text" class="form-control" name="description" id="description" value={{$inquiries->description}}>
</div>
<div class="form-group">
    <label for="quantity">Quantity</label>
    <input type="text" class="form-control" name="quantity" id="quantity" value={{$inquiries->quantity}}>
</div>
<div class="form group">
    <label for="customer_id">Customer</label>
    <select name="customer_id" id="customer_id" class="form-control">
    @foreach($customers as $customer)
        <option value="{{ $customer->id }}">{{ $customer->name }}</option>
    @endforeach
    </select>
</div>
<div class="form group">
    <label for="product_id">Product</label>
    <select name="product_id" id="product_id" class="form-control">
    @foreach($products as $product)
        <option value="{{ $product->id }}">{{ $product->name }}</option>
    @endforeach
    </select>
</div>
<button type="submit" class="btn btn-primary">Update</button>
</form>
</div>
@endsection