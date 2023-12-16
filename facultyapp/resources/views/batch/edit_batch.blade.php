@extends('admin.admin_dashboard')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Batch</div>
  <div class="card-body">
      
      <form action="{{route('store.batch')}}" method="post">
       @csrf
        <label>Batch Code</label><br/>
        <input type="text" name="batch_code" id="batch_code" class="form-control"
        value="{{$batches->batch_code}}"><br/>
        <label>Course Name</label><br/>
        <input type="text" name="course_name" id="course_name" class="form-control" value="{{$batches->course_name}}"><br/>
        <label>Start Date</label><br/>
        <input type="text" name="start_date" id="start_date" class="form-control" placeholder="YY-MM-DD"
        value="{{$batches->start_date}}"><br/>
        <label>End Date</label><br/>
        <input type="text" name="end_date" id="end_date" class="form-control" placeholder="YY-MM-DD"
        value="{{$batches->end_date}}"><br/>
        <input type="submit" value="Save" class="btn btn-success"><br/>
    </form>
   
  </div>
</div>
 
@stop