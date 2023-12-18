@extends('admin.admin_dashboard')
@section('content')
   
                <div class="card">
                    <div class="card-header">
                        <h2>Enrollment</h2>
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
                                        <th>Enroll NO.</th>
                                        <th>Batch.</th>
                                        <th>Student</th>
                                        <th>Join Date</th>
                                        <th>Fee</th>
                                        <th>Action</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($enrollments as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->enroll_no}}</td>
                                        <td>{{ $item->batch_id}}</td>
                                        <td>{{ $item->student_id}}</td>
                                        <td>{{ $item->Join_date}}</td>
                                        <td>{{ $item->fee}}</td>
 
                                        <td>
                                           
                                            <a href="{{route('edit.course',$item->id)}}" title="Edit  Course"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <a onclick="confirmation(event)" href="{{route('delete.course',$item->id)}}" title=" Delete Course"><button class="btn btn-danger btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>Delete</button></a>
 
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
         
@endsection