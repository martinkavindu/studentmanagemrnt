@extends('admin.admin_dashboard')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Course</div>
  <div class="card-body">
      
      <form action="{{route('update.course',$courses->id)}}" method="post">
    @csrf
    <input type="hidden" name="id" value="{{$courses->id}}">
        <label>Name</label><br/>
        <input type="text" name="course_name" id="course_name" class="form-control"
        value="{{$courses->course_name}}"><br/>
        <label>Syllabus</label><br/>
        <input type="text" name="syllabus" id="syllabus" class="form-control"
        value="{{$courses->syllabus}}"><br/>
        <label>Duration</label><br/>
        <input type="text" name="duration" id="duration" class="form-control"
        value="{{$courses->duration}}"><br/>
        <input type="submit" value="Save" class="btn btn-success"><br/>
    </form>
   
  </div>
</div>
 
@stop