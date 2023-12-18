@extends('admin.admin_dashboard')
@section('content')
 
<div class="card">
  <div class="card-header"> Edit Enrollments</div>
  <div class="card-body">
      
      <form action="{{route('update.enrollment',$enrollments->id)}}" method="post">
    @csrf
        <label>Enroll NO.</label><br/>
        <input type="text" name="eroll_no" id="eroll_no" class="form-control"
        value="{{$enrollments->eroll_no}}"><br/>
        <label>Batch</label><br/>
        <input type="text" name="batch_id" id="batch_id" class="form-control"
        value="{{$enrollments->batch_id}}"><br/>
        <label>Student</label><br/>
        <input type="text" name="student_id" id="student_id" class="form-control"
        value="{{$enrollments->student_id}}"><br/>
        <label>Join date</label><br/>
        <input type="date" name="join_date" id="join_date" class="form-control"
        value="{{$enrollments->join_date}}"><br/>
        <label>Fee</label><br/>
        <input type="text" name="fee" id="fee" class="form-control" 
        value="{{$enrollments->fee}}"><br/>
        <input type="submit" value="Save" class="btn btn-success"><br/>
    </form>
   
  </div>
</div>
 
@stop