@extends('admin.admin_dashboard')
@section('content')
   
                <div class="card">
                    <div class="card-header">
                        <h2>All teachers</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{route('add.teacher')}}" class="btn btn-success btn-sm" title="Add New Teacher">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($allteachers as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->phone }}</td>
 
                                        <td>
                            
                                            <a href="{{route('edit.teacher',$item->id)}}" title="Edit teacher"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <a onclick="confirmation(event)" href="{{route('delete.teacher',$item->id)}}" title="delete teacher"><button class="btn btn-danger btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Delete</button></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
         
@endsection