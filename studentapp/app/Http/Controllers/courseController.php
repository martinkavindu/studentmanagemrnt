<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;
use Illuminate\View\View;
class courseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $courses= course::all();
        return view ('courses.index')->with('courses', $courses);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Course::create($input);
        return redirect('courses')->with('flash_message', 'New course Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $courses = Course::find($id);
        return view('courses.show')->with('courses', $courses);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $course= Course::find($id);
        return view('courses.edit')->with('courses', $student);
    }
   

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $course = Course::find($id);
        $input = $request->all();
        $course->update($input);
        return redirect('courses')->with('flash_message', 'Courses Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        course::destroy($id);
        return redirect('courses')->with('flash_message', 'Course deleted!');
    }
}
