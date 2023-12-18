@extends('admin.admin_dashboard')
@section('content')
 
<div class="card">
  <div class="card-header"> Edit Enrollments</div>
  <div class="card-body">
      
      <form action="{{route('update.enrollment',$enrollments->id)}}" method="post">
    @csrf
        <label>Enroll NO.</label><br/>
        <input type="text" name="enroll_code" id="enroll_code" class="form-control"
        value="{{$enrollments->enroll_code}}"><br/>
        <label>Batch</label><br/>
        <input type="text" name="batch_code" id="batch_code" class="form-control"
        value="{{$enrollments->batch_code}}"><br/>
        <label>Student</label><br/>
        <input type="text" name="student_adm" id="student_adm" class="form-control"
        value="{{$enrollments->student_adm}}"><br/>
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