<?php

namespace App\Exports;

use App\Models\Enrollments;
use Maatwebsite\Excel\Concerns\FromCollection;

class EnrollmentsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Enrollments::all();
    }
}
