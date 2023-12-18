@extends('admin.admin_dashboard')
@section('content')
 
<div class="card">
  <div class="card-header">Enrollments</div>
  <div class="card-body">
      
      <form action="{{route('store.enrollment')}}" method="post">
    @csrf
        <label>Enroll NO.</label><br/>
        <input type="text" name="eroll_no" id="eroll_no" class="form-control"><br/>
        <label>Batch</label><br/>
        <input type="text" name="batch_id" id="batch_id" class="form-control"><br/>
{{-- 
<select name="batch_id" id="batch_id" class="form-select">
    @foreach ($batches as $item=>$name)
        <option value="{{$name}}">
            {{$name}}
        </option>   
    @endforeach
</select>
--}}


        <label>Student</label><br/>
        <input type="text" name="student_id" id="student_id" class="form-control"><br/>
        <label>Join date</label><br/>
        <input type="date" name="join_date" id="join_date" class="form-control"><br/>
        <label>Fee</label><br/>
        <input type="text" name="fee" id="fee" class="form-control"><br/>
        <input type="submit" value="Save" class="btn btn-success"><br/>
    </form>
   
  </div>
</div>
 
@stop