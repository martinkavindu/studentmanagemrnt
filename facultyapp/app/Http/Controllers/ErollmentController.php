<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\auth;
use App\Models\Enrollment;


class ErollmentController extends Controller
{
    public function AllEnrollments (){

        $enrollments = Enrollment::latest()->get();
        return view('enrollment.all_enrollment',compact('enrollments'));
    }

    public function AddEnrollment(){

        return view('enrollment.add_enrollment');
    }
}
