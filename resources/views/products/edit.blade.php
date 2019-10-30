@extends('layouts.master')

@section('content')
<div class="mt-4 px-3 pb-3">
<h3>Edit {{$products->name}}</h3>
<form action="{{ route('products.update', $products->id) }}" method="post">
@method('PATCH')
@csrf
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name" id="name" value = {{$products->name}}>
</div>
<div class="form-group">
    <label for="description">Description</label>
    <input type="text" class="form-control" name="description" id="description" value={{$products->description}}>
</div>
<div class="form-group">
    <label for="costperprod">Cost</label>
    <input type="text" class="form-control" name="costperprod" id="costperprod" value={{$products->costperprod}}>
</div>
<div class="form group">
<label for="supplier_id">Supplier</label>
<select name="supplier_id" id="supplier_id" class="form-control">
    @foreach($suppliers as $supplier)
        <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
    @endforeach
</select>
</div>
<button type="submit" class="btn btn-primary">Update</button>
</form>
</div>
@endsection