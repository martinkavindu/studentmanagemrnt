@extends('admin.admin_dashboard')
@section('content')
 
<div class="card">
  <div class="card-header">Create Batch</div>
  <div class="card-body">
      
      <form action="{{route('store.batch')}}" method="post">
       @csrf
        <label>Batch Code</label><br/>
        <input type="text" name="batch_code" id="batch_code" class="form-control" required><br/>
        <label>Course </label><br/>
       <!--<input type="text" name="course_name" id="course_name" class="form-control"><br/>-->
       <select name="course_name" id="course_name" class="form-select">

        @foreach($courses as $id=>$name)
        <option value="{{$name}}">
          {{$name}}
        </option>
        @endforeach

       </select>
        <label>Start Date</label><br/>
        <input type="date" name="start_date" id="start_date" class="form-control" placeholder="YY-MM-DD" required><br/>
        <label>End Date</label><br/>
        <input type="date" name="end_date" id="end_date" class="form-control" placeholder="YY-MM-DD" required><br/>
        <input type="submit" value="Save" class="btn btn-success"><br/>
    </form>
   
  </div>
</div>
 
@stop