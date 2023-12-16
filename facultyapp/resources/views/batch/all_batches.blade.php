@extends('Layout')
@section('content')
   
                <div class="card">
                    <div class="card-header">
                        <h2> Batches</h2>
                    </div>
                    <div class="card-body">
                        <a href="#" class="btn btn-success btn-sm" title="Add New course batch">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Batch Code</th>
                                        <th>Course Name</th>
                                        <th>Start date</th>
                                        <th>End date</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($batches as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->batch_code}}</td>
                                        <td>{{ $item->course_name}}</td>
                                        <td>{{ $item->start_date}}</td>
                                        <td>{{ $item->end_date}}</td>
 
                                        <td>
                                            <a href="#" title="edit batch"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <a href="#" title="delete batch"><button class="btn btn-danger btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Delete</button></a>
                            
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
         
@endsection