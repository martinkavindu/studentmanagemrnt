@extends('admin.admin_dashboard')
@section('content')
 
<div class="card">
  <div class="card-header">Enrollments</div>
  <div class="card-body">
      
      <form action="{{route('store.enrollment')}}" method="post">
    @csrf
        <label>Enroll NO.</label><br/>
        <input type="text" name="enroll_code" id="enroll_code" class="form-control" required><br/>
        <label>Batch</label><br/>
    <!-- <input type="text" name="batch_code" id="batch_code" class="form-control"><br/> -->

<select name="batch_code" id="batch_code" class="form-select">
    @foreach ($batches as $item=>$name)
        <option value="{{$name}}">
            {{$name}}
        </option>   
    @endforeach
</select>



        <label>Student</label><br/>
        <input type="text" name="student_adm" id="student_adm" class="form-control" required><br/>
        <label>Join date</label><br/>
        <input type="date" name="join_date" id="join_date" class="form-control" required><br/>
        <label>Fee</label><br/>
        <input type="text" name="fee" id="fee" class="form-control"required><br/>
        <input type="submit" value="Save" class="btn btn-success"><br/>
    </form>
   
  </div>
</div>
 
@stop