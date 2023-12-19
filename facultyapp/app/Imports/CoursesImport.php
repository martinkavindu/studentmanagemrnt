<?php

namespace App\Imports;

use App\Models\Courses;
use Maatwebsite\Excel\Concerns\ToModel;

class CoursesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Courses([
            'course_name'     => $row[0],
            'syllabus'    => $row[1], 
            'duration' =>$row[2],
        ]);
    }
}
