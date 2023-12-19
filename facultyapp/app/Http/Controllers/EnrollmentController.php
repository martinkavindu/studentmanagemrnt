<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\auth;
use App\Models\Enrollments;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\EnrollmentsExport;
use App\Models\Batches;

class EnrollmentController extends Controller
{
    
    public function AllEnrollments (){

        $enrollments = Enrollments::latest()->get();
        return view('enrollment.all_enrollment',compact('enrollments'));
    }

    public function AddEnrollment(){

        $batches = Batches::pluck('batch_code','id');
  
          return view('enrollment.add_enrollment',compact('batches'));
  
        // return view('enrollment.add_enrollment');
      }
      public  function StoreEnrollment(Request $request){

        Enrollments::insert([

            'enroll_code' => $request->enroll_code,
            'batch_code' =>$request->batch_code,
            'student_adm' =>$request->student_adm,
            'join_date' =>$request->join_date,
            'fee' =>$request->fee,
        ]);
         
        return redirect()->route('all.enrollments')->with('message',"enrollment created successfully");

    }
    public function EditEnrollment($id){

        $enrollments = Enrollments::findOrFail($id);
   
           return view('enrollment.edit_enrollment',compact('enrollments'));
   
       }
       public function UpdateEnrollment(Request $request){

        $eid = $request->id;
        Enrollments::findOrFail($eid)->update([
            'enroll_code' => $request->enroll_code,
            'batch_code' =>$request->batch_code,
            'student_adm' =>$request->student_adm,
            'join_date' =>$request->join_date,
            'fee' =>$request->fee,
        ]);

        return redirect()->route('all.enrollments')->with('message','Enrollment updated successfuly');
    }
    
    public function DeleteEnrollment($id){

        Enrollment::findOrFail($id)->delete();

        return redirect()->route('all.enrollments')->with('message','Enrollment deleted successfully');
    }

    // exports

    public function Export(){

        return Excel::download(new EnrollmentsExport, 'enrollments.xlsx');
    }
}
