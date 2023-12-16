<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\auth;
use App\Models\Courses;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
   public function AllCourses(){

    $courses = Courses::latest()->get();

    return  view ('courses.all_courses',compact('courses'));
   }
    public function AddCourse(){

        return view('courses.add_course');
    }

    public function StoreCourse (Request $request){
        
        //validate
        $request->validate([
            "course_name"=>'required'
        ]);

        Courses::insert([
            'course_name'=>$request->course_name,
            'syllabus' =>$request->syllabus,
            'duration'=>$request->duration,
          
        ]);

        return redirect()->route('all.courses')->with('message','course created successfully');
       
    }
}
