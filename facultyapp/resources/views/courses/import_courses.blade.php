@extends('admin.admin_dashboard')
@section('content')

<div class="card">
    <div class="card-header">
        <h2>Import Courses</h2>
    </div>
    <div class="card-body">
        <form  id="myform"  method="POST" action="{{route('import')}}" class="forms-sample"
        enctype="multipart/form-data">

            @csrf
        <div class="mb-3">
            <label for="formFile" class="form-label"> Upload xlsv file</label>
            <input class="form-control" type="file" id="import_file" name="import_file" required>
          </div>
          <div class="mb-3">
            <button type="submit" class="btn btn-success">Upload</button>
          </div>
        </form>
    </div>
</div>







@endsection