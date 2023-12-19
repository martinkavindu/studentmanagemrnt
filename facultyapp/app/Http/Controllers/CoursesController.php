<?php

namespace App\Http\Controllers;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\auth;
use App\Models\Courses;
use App\Imports\CoursesImport;
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

 public function EditCourse ($id){

$courses = Courses::findOrFail($id);

return view ('courses.edit_courses', compact('courses'));
    }

    public function UpdateCourse(Request $request){

        $cid = $request->id;
         
        Courses::findOrFail($cid)->update([
            'course_name'=>$request->course_name,
            'syllabus'=>$request->syllabus,
            'duration' =>$request->duration,
        ]);

        return redirect()->route('all.courses')->with('message','course updated successfully');

    }

    public function DeleteCourse($id){

        Courses::findOrFail($id)->delete();

        return redirect()->route('all.courses')->with('message','course deleted successfully');

    }

public function ImportCourses(){

    return view ('courses.import_courses');
}


    public function Import (Request $request){

        Excel::import(new CoursesImport, $request->file('import_file'));

        return redirect()->route('all.courses')->with('message','courses imported successfully');
    }

}
