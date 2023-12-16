@extends('admin.admin_dashboard')
@section('content')
   
                <div class="card">
                    <div class="card-header">
                        <h2>Courses</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{route('add.course')}}" class="btn btn-success btn-sm" title="Add New course">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>SI</th>
                                        <th>Name</th>
                                        <th>Syllabus</th>
                                        <th>Duration </th>
                                        <th>Action</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($courses as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->course_name}}</td>
                                        <td>{{ $item->syllabus}}</td>
                                        <td>{{ $item->duration}}</td>
 
                                        <td>
                                           
                                            <a href="{{route('edit.course',$item->id)}}" title="Edit  Course"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <a href="{{route('delete.course',$item->id)}}" title=" Delete Course"><button class="btn btn-danger btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>Delete</button></a>
 
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
         
@endsection