
@extends('admin.admin_dashboard')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Profile</div>
  <div class="card-body">
      
      <form action="{{route('update.student',$user->id)}}" method="post">
        @csrf
        <label>Name</label><br/>
        <input type="text" name="name" id="name" value="{{$user->name}}" class="form-control"><br/>
        <label>Email</label><br/>
        <input type="email" name="email" id="email" value="{{$user->email}}" class="form-control"><br/>
        <label>Address</label><br/>
        <input type="text" name="address" id="address" value="{{$user->address}}" class="form-control"><br/>
        <label>Phone</label><br/>
        <input type="text" name="phone" id="phone" value="{{$user->phone}}" class="form-control"><br/>
        <input type="submit"  class="btn btn-success"><br/>
    </form>
   
  </div>
</div>
 
@stop