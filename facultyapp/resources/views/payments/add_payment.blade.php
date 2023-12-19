@extends('admin.admin_dashboard')
@section('content')
 
<div class="card">
  <div class="card-header">Add payment</div>
  <div class="card-body">
      
      <form action="{{route('store.payment')}}" method="post">
       @csrf
        <label>Enrollment No</label><br/>

        <select name="enroll_code" id="enroll_code" class="form-select">

            @foreach($enrollments as $id=>$name)
            <option value="{{$name}}">
              {{$name}}
            </option>
            @endforeach
    
           </select>

        <label>Paid Date</label><br/>
        <input type="date" name="paid_date" id="paid_date" class="form-control" required><br/>
        <label>Amount</label><br/>
        <input type="text" name="amount" id="amount" class="form-control" placeholder="Ksh" required><br/>
        <input type="submit" value="Save" class="btn btn-success"><br/>
    </form> 
  </div>
</div>
 
@stop