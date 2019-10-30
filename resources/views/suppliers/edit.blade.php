@extends('layouts.master')

@section('content')
<div class="mt-4">
<h3>Edit Supplier</h3>
<form action="{{ route('suppliers.update', $suppliers->id) }}" method="post">
@method('PATCH')
@csrf
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name" id="name" value={{ $suppliers->name }}>
</div>
<div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" name="address" id="address" value={{ $suppliers->address }}>
</div>
<div class="form-group">
    <label for="PNumber">Phone Number</label>
    <input type="text" class="form-control" name="PNumber" id="PNumber" value={{ $suppliers->PNumber }}>
</div>
<button type="submit" class="btn btn-primary">Update</button>
</form>
</div>
@endsection