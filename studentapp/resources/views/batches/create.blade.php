@extends('Layout')
@section('content')
 
<div class="card">
  <div class="card-header">Course Batches</div>
  <div class="card-body">
      
      <form action="{{ url('batches') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label><br/>
        <input type="text" name="name" id="name" class="form-control"><br/>
        <label>Course Name</label><br/>
        <input type="text" name="course_id" id="course_id" class="form-control"><br/>
        <label>Start Date</label><br/>
        <input type="text" name="start_date" id="start_date" class="form-control" placeholder="YY-MM-DD"><br/>
        <input type="submit" value="Save" class="btn btn-success"><br/>
    </form>
   
  </div>
</div>
 
@stop