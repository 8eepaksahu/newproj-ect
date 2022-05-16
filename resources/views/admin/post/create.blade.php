@extends('layouts.master')
@section('title','Blog Dashboard')
@section('content')
<div class="container-fluid  pt-2 px-4">
    <div class="card">
    <div class="row">
                        @if ($errors->any())
    <div class="alert alert-danger">
          @foreach($errors->all() as $error)
          <div>{{$error}}</div>
          @endforeach
          </div>
 @endif
</div>
        <div class="card-header">
            <h4>Add  posts<a href="{{url('admin/add-post')}} " class="btn  btn-primary float-end">Add Post</a></h4>
            @csrf
        </div>
        <div class="card-body">
            <form action="{{url('admin/add-post')}}"method="POST">
                @csrf
                <div class="mb-3">
                <label for="">Category</label>
                <select name="category_id" class="form-control">
                    @foreach($category as $cateitem)
                    <option value="{{$cateitem->id}}">{{$cateitem->name}}</option>
                    @endforeach
                    
                </select>
                <div class="mb-3">
                    <label for="">PostName</label>
                    <input type="text" name="name" class="form-control"/>
                </div>
                <div class="mb-3">
                    <label for="">slug</label>
                    <input type="text" name="slug" class="form-control"/>
                </div>
                <div class="mb-3">
                    <label for="">description</label>
                    <textarea  name="description"rows="4" class="form-control"></textarea>
                   
                </div>
                <div class="mb-3">
                    <label for="">link</label>
                    <input type="text" name="yt_iframe" class="form-control"/>
                </div>
                <div class="mb-3">
                    <label for="">Meta title</label>
                    <input type="text" name="meta_title" class="form-control"/>
                </div>
                <div class="mb-3">
                    <label for="">Meta keyword</label>
                    <textarea  name="meta_keyword"rows="2" class="form-control"></textarea>

                </div>
                <div class="mb-3">
                    <label for="">Meta Description</label>
                    <textarea  name="meta_description"rows="5" class="form-control"></textarea>

                </div>
               
                <div class="row">
                    <div class="col-md-4">
                        <label for="">status</label>
                        <input type="checkbox" name="status" />
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="mb-3">
                        <button  type="submit" class="btn btn-primary float-end">Save Post</button>

                    </div>
                </div>

                </div>
            </form>
            
        </div>
    </div>

</div>
@endsection