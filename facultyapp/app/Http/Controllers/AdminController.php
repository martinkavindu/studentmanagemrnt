<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
   
public function AdminDashboard (){

    return view('admin.admin_dashboard');

}

public function AllTeachers(){
$allteachers = User::where('role','teacher')->get();

return view('teacher.all_teachers', compact('allteachers'));

}

public function AddTeacher () {

    return view ('teacher.add_teacher');
}

public function StoreTeacher (Request $request) {

    $user = new User();
    $user->username = $request->username;
    $user->name = $request->name;
    $user->phone = $request->phone;
    $user->email = $request->email;
    $user->address = $request->address;
    $user->password = Hash::make($request->password);
    $user->role = 'teacher';

    $user->save();

   // Alert::success('Teacher added successfully');
    return redirect()->route('all.teachers')->with('message','Teacher added successfuly');
}

public function EditTeacher ($id){

    $user =User::findOrFail($id);
    return view ('teacher.edit_teacher',compact('user'));

}
public function UpdateTeacher(Request $request,$id){

$user = User::findOrFail($id);
$user->username = $request->username;
$user->name = $request->name;
$user->phone = $request->phone;
$user->email = $request->email;
$user->address = $request->address;
$user->role = 'teacher';

$user->save();

return redirect()->route('all.teachers')->with('message','Teacher updated successfuly');
}

public function DeleteTeacher($id){

    $user = User::findOrFail($id);

    if(!is_null($user)){

        $user->delete();
    }
    return redirect()->route('all.teachers')->with('message','Teacher deleted successfuly');

}


//  stuents group methods
public function Allstudents(){
    $allstudents= User::where('role','user')->get();
    
    return view('student.all_students', compact('allstudents'));
    
    }

public function AddStudent () {

    return view ('student.add_student');
}
public function StoreStudent(Request $request) {

    $user = new User();
    $user->username = $request->username;
    $user->name = $request->name;
    $user->phone = $request->phone;
    $user->email = $request->email;
    $user->address = $request->address;
    $user->password = Hash::make($request->password);
    $user->role = 'user';

    $user->save();

    return redirect()->route('all.students')->with('message','student added successfuly');
}

public function EditStudent ($id){

    $user =User::findOrFail($id);
    return view ('student.edit_student',compact('user'));

}
public function UpdateStudent(Request $request,$id){

    $user = User::findOrFail($id);
    $user->username = $request->username;
    $user->name = $request->name;
    $user->phone = $request->phone;
    $user->email = $request->email;
    $user->address = $request->address;

    
    $user->save();
    
    return redirect()->route('all.students')->with('message','student updated successfuly');
    }

    public function DeleteStudent($id){

        $user = User::findOrFail($id);
    
        if(!is_null($user)){
    
            $user->delete();
        }
        return redirect()->route('all.students')->with('message','student deleted successfuly');

    }

}
