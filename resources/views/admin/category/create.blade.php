@extends('layouts.master')
@section('title','crud')
@section('content')
<div class="container-fluid pt-4">
<h1 class="mt-4">category</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">category</li>
                        </ol>
                        <div class="row">
                        @if ($errors->any())
    <div class="alert alert-danger">
          @foreach($errors->all() as $error)
          <div>{{$error}}</div>
          @endforeach
          </div>
 @endif
</div>
<div class="card">
<!--@if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif-->
    
    <div class="card-header">
        <h1 class='#'>Add category</h1>

    </div>
    <div class="card-body">
       <!-- @if ($errors->any())
    <div class="alert alert-danger">
          @foreach($errors->all as $error)
          <div>{{error}}</div>
          @endforeach
          </div>
          @endif-->


        <form action="{{ url('admin/add-category') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="">category name</label>
<input type="text" name="name" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">slug</label>
<input type="text" name="slug" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">description</label>
<textarea row="5" name="description" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label for="">Image</label>
            <input type="file" name="image" class="form-control"/>
       </div>
       <div class="mb-3">
            <label for="">Meta Title</label>
<input type="text" name="meta_title" class="form-control">
        </div>
      
        <div class="mb-3">
            <label for="">Meta Keywords</label>
<textarea row="5" name="meta_keyword" class="form-control"></textarea>
        </div>

        <div class="row">
            <div class="col-md-3 mb-3">
                <label for="">status</label>
                <input type="checkbox" name="status" />
            </div>

          
         <div class="col-md-6">
             <button type="submit" class=" btn btn-primary">save categories</button>
         </div>
         </div>

        

</form>
</div>
</div>
</div>
</div>
</div>
@endsection