@extends('admin.admin_dashboard')
@section('content')
 
<div class="card">
  <div class="card-header">Add Student</div>
  <div class="card-body">
      
      <form action="{{route('store.student')}}" method="post">
        {!! csrf_field() !!}
        <label>Name</label><br/>
        <input type="text" name="name" id="name" class="form-control" required><br/>
        <label>Username</label><br/>
        <input type="text" name="username" id="username" class="form-control" required><br/>
        <label>Email</label><br/>
        <input type="email" name="email" id="email" class="form-control" required><br/>
        <label>Password</label><br/>
        <input type="password" name="password" id="password" class="form-control" required><br/>

        <label>Address</label><br/>
        <input type="text" name="address" id="address" class="form-control" required><br/>
        <label>Mobile</label><br/>
        <input type="text" name="phone" id="phone" class="form-control" required><br/>

        <input type="submit" value="Save" class="btn btn-success"><br/>
    </form>
   
  </div>
</div>
 
@stop