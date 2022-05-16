@extends('layouts.master')
@section('title','View user')
@section('content')
<div class="container-fluid px-4">
    <div class="card">
    @if (session('message'))
       <div class="alert alert-sucess">{{ session('message') }}</div>
  @endif
        <div class="card-header">
            <h3>View user</h3>
 </div>
        <div class="card-body">
        
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Role as</th>
                        <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                @foreach($user as $item)
                    <tr><td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->role_as =='1'?'Admin':'User'}}</td>
                    <td>
                    <a href="{{url('admin/user/'.$item->id)}}" class="btn btn-primary">Edit</a>
 

                    </td>
                   
                </tr>
                @endforeach
                   
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection