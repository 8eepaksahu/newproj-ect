@extends('layouts.master')
@section('title','Edit user')
@section('content')
<div class="container-fluid px-4">
    <div class="card">
    @if (session('message'))
       <div class="alert alert-sucess">{{ session('message') }}</div>
  @endif
        <div class="card-header">
            <h3>View user<a href="{{url('admin/user')}} " class="btn  btn-danger float-end">Back</a>
   
                            </h3>
 </div>
        <div class="card-body">
           
                <div class="mb-3">
                    <label>full name</label>
                    <p class="form-control">{{$user->name}}</p>
                </div>
                <div class="mb-3">
                    <label>Email</label>
                    <p class="form-control">{{$user->email}}</p>
                </div>
                <div class="mb-3">
                    <label>created_At</label>
                    <p class="form-control">{{$user->created_at->format('d/m/v')}}</p>
                </div>
                <form action="{{url('admin/update-user/'.$user->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                <div class="mb-3">
                    <label>Role</label>
                    <select name="role_as" id="" class="form-control">
                        <option value="1"{{ $user->role_as =='1'? 'selected':''}}>Admin</option>
                        <option value="0"{{ $user->role_as =='0'? 'selected':''}}>user</option>
                        <option value="2"{{ $user->role_as =='2'? 'selected':''}}>Blogger</option>
                    </select>
                                  
                                               </div>

                                            <div class="mb-3">
                                                <button type="submit" class="btn btn-primary">update user role</button>
                                            </div>
            </form>


        </div>

</div>
@endsection