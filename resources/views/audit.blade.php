@extends('layouts.master')

@section('content')
<div class="mt-4">
    <h3>All audits</h3>
    <div class="card">
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Model</th>
                    <th scope="col">Action</th>
                    <th scope="col">User</th>
                    <th scope="col">Time</th>
                    <th scope="col">Old Values</th>
                    <th scope="col">New Values</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($audits as $audits)
                    <tr>
                      <td>{{$audits->id}}</td>
                      <td>{{$audits->auditable_type}}</td>
                      <td>{{$audits->event}}</td>
                      <td>{{$audits->user_id}}</td>
                      <td>{{$audits->created_at}}</td>
                      <?php
                      $audit = implode(' ', array_values($audits->old_values));?>
                      <td>- {{$audit}}</td>
                      <?php
                      $audit = implode('
                      -', array_values($audits->new_values));?>
                      <td>- {{$audit}}</td>
                      

                      <td></td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            </div>
            </div>
            @endsection