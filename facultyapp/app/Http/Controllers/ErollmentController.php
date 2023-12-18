<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\auth;
use App\Models\Enrollment;
//use App\Models\Batches;


class ErollmentController extends Controller
{
    public function AllEnrollments (){

        $enrollments = Enrollment::latest()->get();
        return view('enrollment.all_enrollment',compact('enrollments'));
    }

    public function AddEnrollment(){

      //  $batches = Batches::pluck('batch_code','id');

       // return view('enrollment.add_enrollment',compact('batches'));

       return view('enrollment.add_enrollment');
    }
    public  function StoreEnrollment(Request $request){

        Enrollment::insert([

            'eroll_no' => $request->eroll_no,
            'batch_id' =>$request->batch_id,
            'student_id' =>$request->student_id,
            'join_date' =>$request->join_date,
            'fee' =>$request->fee,
        ]);
         
        return redirect()->route('all.enrollments')->with('message',"enrollment created successfully");

    }

    public function EditEnrollment($id){

     $enrollments = Enrollment::findOrFail($id);

        return view('enrollment.edit_enrollment',compact('enrollments'));

    }
    public function UpdateEnrollment(Request $request){

        $eid = $request->id;
        Enrollment::findOrFail($eid)->update([
            'eroll_no' => $request->eroll_no,
            'batch_id' =>$request->batch_id,
            'student_id' =>$request->student_id,
            'join_date' =>$request->join_date,
            'fee' =>$request->fee,
        ]);

        return redirect()->route('all.enrollments')->with('message','Enrollment updated successfuly');
    }

    public function DeleteEnrollment($id){

        Enrollment::findOrFail($id)->delete();

        return redirect()->route('all.enrollments')->with('message','Enrollment deleted successfully');
    }
}
