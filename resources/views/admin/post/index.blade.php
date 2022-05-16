@extends('layouts.master')
@section('title','Blog Dashboard')
@section('content')
<div class="container-fluid px-4">
    <div class="card">
    @if (session('message'))
       <div class="alert alert-sucess">{{ session('message') }}</div>
  @endif
        <div class="card-header">
            <h4>view posts<a href="{{url('admin/add-post')}} " class="btn  btn-primary float-end">Add Post</a></h4>
        </div>
        <div class="card-body">
        
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>category</th>
                        <th>POST NAME</th>
                        <th>SATUS</th>
                        <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                @foreach($post as $item)
                    <tr><td>{{$item->id}}</td>
                    <td>{{$item->category->name}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->status =='1'?'Hidden':'visiable'}}</td>
                    <td>
                    <a href="{{url('admin/post/'.$item->id)}}" class="btn btn-primary">Edit</a>
 

                    </td>
                    <td>
                    <a href="{{url('admin/delete-post/'.$item->id)}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
                   
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection