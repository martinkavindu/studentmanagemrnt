@extends('admin.admin_dashboard')
@section('content')
   
                <div class="card">
                    <div class="card-header">
                        <h3>Payments</h3>
                    </div>
                    <div class="card-body">
                        <a href="{{route('add.payment')}}" class="btn btn-success btn-sm" title="Add New course batch">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>SI</th>
                                        <th>Enrollment No</th>
                                        <th>Paid date</th>
                                        <th>Amount</th>
                                        <th>Action  </th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($payments as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->enroll_code}}</td>
                                        <td>{{ $item->paid_date}}</td>
                                        <td>{{ $item->amount}}</td>
                                       
 
                                        <td>
                                            <a  href="{{route('edit.payment',$item->id)}}" title="edit payment"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <a onclick="confirmation(event)" href="{{route('delete.payment',$item->id)}}" title="delete payment"><button class="btn btn-danger btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Delete</button></a>
                                            <a  href="{{route('print.report',$item->id)}}" title="print receipt"><button class="btn btn-success btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>print</button></a>
                            
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
         
@endsection