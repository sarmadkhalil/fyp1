@extends('layouts.master')
@section('content')
<div class="mt-3">
<div class="card card-widget widget-user">
    <!-- Add the bg color to the header using any of the bg-* classes -->
    <div class="widget-user-header bg-info-active">
    <h3 class="widget-user-username">{{$users->name}}</h3>
    <h5 class="widget-user-desc">{{$users->bio}}</h5>
    </div>
    <div class="widget-user-image">
    <img class="img-circle elevation-2" src="../img/rocket.png" alt="User Avatar">
    </div>
    <div class="card-footer">
    <div class="row">
        <div class="col-sm-4 border-right">
        <div class="description-block">
            <h5 class="description-header">{{$users->id}}</h5>
            <span class="description-text">Index number</span>
        </div>
        <!-- /.description-block -->
        </div>
        <!-- /.col -->
        <div class="col-sm-4 border-right">
        <div class="description-block">
            <h5 class="description-header">{{$users->email}}</h5>
            <span class="description-text">Email</span>
        </div>
        <!-- /.description-block -->
        </div>
        <!-- /.col -->
        <div class="col-sm-4">
        <div class="description-block">
            <h5 class="description-header">{{$users->type}}</h5>
            <span class="description-text">Role</span>
        </div>
        </div>
        <!-- /.description-block -->
        </div>
    <!-- /.row -->
    </div>
    </div>
</form>
</div>
</div>
@endsection