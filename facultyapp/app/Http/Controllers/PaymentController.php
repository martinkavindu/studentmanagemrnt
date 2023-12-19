<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;
use Illuminate\Support\Facades\auth;
use App\Models\payment;
use App\Models\Enrollments;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function AllPayments (){

        $payments = payment::latest()->get();

        return  view ('payments.all_payments',compact('payments'));
    }

    public function AddPayment (){

        $enrollments = Enrollments::pluck('enroll_code','id');

return view('payments.add_payment',compact('enrollments'));

    }

    public function StorePayment(Request $request){

     payment::insert([

        'enroll_code' =>$request->enroll_code,
        'paid_date' =>$request->paid_date,
        'amount' =>$request->amount,
     ]);

     return redirect()->route('all.payments')->with('message','Payment Added Successfuly');
    }
public function EditPayment ($id){

  $payments =payment::findOrFail($id);

    return view('payments.edit_payment',compact('payments'));
}
public function UpdatePayment(Request  $request){


    $pid = $request->id;
payment::findOrFail($pid)->update([

    'enroll_code' => $request->enroll_code,
    'paid_date' => $request->paid_date,
    'amount' =>$request->amount,

]);
return redirect()->route('all.payments')->with('message','Payment updated successfully');

}

public function DeletePayment ($id){

    payment::findOrFail($id)->delete();

    return redirect()->route('all.payments')->with('message','payment deleted successfully');
}

}
