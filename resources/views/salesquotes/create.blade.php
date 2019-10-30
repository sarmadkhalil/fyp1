@extends('layouts.master')

@section('content')
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name" id="name" value = {{$salesquotes->inquiry->name}}>
</div>
<div class="form-group">
    <label for="description">Description</label>
    <input type="text" class="form-control" name="description" id="description">
</div>
<div class="form-group">
    <label for="costperprod">Cost</label>
    <input type="text" class="form-control" name="costperprod" id="costperprod">
</div>
<div class="form group">
<label for="supplier_id">Supplier</label>
<select name="supplier_id" id="supplier_id" class="form-control">
</select>
</div>
@endsection