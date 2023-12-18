@extends('admin.admin_dashboard')
@section('content')
 
<div class="card">
  <div class="card-header">Enrollments</div>
  <div class="card-body">
      
      <form action="{{route('store.course')}}" method="post">
    @csrf
        <label>Enroll NO.</label><br/>
        <input type="text" name="enroll_no" id="enroll_no" class="form-control"><br/>
        <label>Batch</label><br/>
        <input type="text" name="batch_id" id="batch_id" class="form-control"><br/>
        <label>Student</label><br/>
        <input type="text" name="student" id="student" class="form-control"><br/>
        <label>Join date</label><br/>
        <input type="text" name="join_date" id="join_date" class="form-control"><br/>
        <label>Fee</label><br/>
        <input type="text" name="fee" id="fee" class="form-control"><br/>
        <input type="submit" value="Save" class="btn btn-success"><br/>
    </form>
   
  </div>
</div>
 
@stop