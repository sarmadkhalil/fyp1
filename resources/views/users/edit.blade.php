@extends('layouts.master')

@section('content')
<div class="mt-4 px-3 pb-3">
<h3>Edit User {{$users->name}}</h3>
<form action="{{ route('users.update', $users->id) }}" method="post">
@method('PATCH')
@csrf
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form" name="name" id="name" value={{ $users->name }}>
</div>
<div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form" name="email" id="email" value={{ $users->email }}>
</div>
<div class="form-group">
    <label for="bio">bio</label>
    <input type="text" class="form" name="bio" id="bio" value={{$users->bio}}>
</div>
<div class="form-group">
    <label for="password">password</label>
    <input type="password" class="form" name="password" id="password" value={{$users->password}}>
</div>
<div class="form-group">
    <label for="type">Type</label>
    <select name="type" id="type" value={{$users->type}}>
        <option value="user">employee</option>
        <option value="manager">manager</option>
        <option value="admin">admin</option>
    </select>
</div>
<button type="submit" class="btn btn-primary">Update</button>
</form>
</div>
@endsection