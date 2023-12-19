@extends('admin.admin_dashboard')
@section('content')
 
<div class="card">
  <div class="card-header">Edit payment</div>
  <div class="card-body">
      
      <form action="{{route('update.payment',$payments->id)}}" method="post">
       @csrf
        <label>Enrollment No</label><br/>
        <input class="form-control" type="text" id="enroll_code" name="enroll_code" value="{{$payments->enroll_code}}" readonly><br/>

        <label>Paid Date</label><br/>
        <input type="date" name="paid_date" id="paid_date" class="form-control" required value="{{$payments->paid_date}}"><br/>
        <label>Amount</label><br/>
        <input type="text" name="amount" id="amount" class="form-control" placeholder="Ksh" required  value="{{$payments->amount}}"><br/>
        <input type="submit" value="Save" class="btn btn-success"><br/>
    </form> 
  </div>
</div>
 
@stop