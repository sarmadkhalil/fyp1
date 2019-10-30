@extends('layouts.master')

@section('content')
<div class="mt-4">
<h3>Edit customer</h3>
<form action="{{ route('customers.update', $customers->id) }}" method="post">
@method('PATCH')
@csrf
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name" id="name" value={{ $customers->name }}>
</div>
<div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" name="address" id="address" value={{$customers->address}}>
</div>
<div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" id="email" value={{ $customers->email }}>
</div>
<div class="form-group">
    <label for="PNumber">Phone Number</label>
    <input type="text" class="form-control" name="PNumber" id="PNumber" value={{ $customers->PNumber }}>
</div>
<button type="submit" class="btn btn-primary">Update</button>
</form>
</div>
@endsection