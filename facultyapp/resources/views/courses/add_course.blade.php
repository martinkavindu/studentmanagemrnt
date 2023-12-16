@extends('admin.admin_dashboard')
@section('content')
 
<div class="card">
  <div class="card-header">Courses</div>
  <div class="card-body">
      
      <form action="{{route('store.course')}}" method="post">
    @csrf
        <label>Name</label><br/>
        <input type="text" name="course_name" id="course_name" class="form-control"><br/>
        <label>Syllabus</label><br/>
        <input type="text" name="syllabus" id="syllabus" class="form-control"><br/>
        <label>Duration</label><br/>
        <input type="text" name="duration" id="duration" class="form-control"><br/>
        <input type="submit" value="Save" class="btn btn-success"><br/>
    </form>
   
  </div>
</div>
 
@stop