<?php

namespace App\Http\Controllers;

use App;
use Auth;
use App\Models\payment;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function printReport($id)
    {
        $payment = payment::findOrFail($id);

        $pdf = App::make('dompdf.wrapper');

        $print = "<div style='margin:20px;padding:20px;'>";
        $print .= "<h1 align='center'>Payment Receipt </h1>";
        $print .= "<hr/>";
        $print .= "<p> Receipt No: <b>" . $id . "</b> </p>";
        $print .= "<p>Date: <b>" . $payment->paid_date . "</b> </p>";
        $print .= "<p> Enrollment No : <b>" . $payment->enroll_code . "</b> </p>";
        $print .= "<p> Student admission No :<b>" . $payment->student_adm . "</b> </p>";
        $print .= "<hr/>";
        $print .= "<table style='width:100%;'>";
        $print .= "<tr>";
        $print .= "<td>Description </td>";
        $print .= "<td> Amount </td>";
        $print .= "</tr>";
        $print .= "<tr>";
        $print .= "<td> <h3>" . $payment->enroll_code . "</h3> </td>";
        $print .= "<td>  <h3> Ksh " . $payment->amount . "</h3> </td>";
        $print .= "</tr>";
        $print .= "</table>";
        $print .= "<span> Printed By : <b>" . Auth::user()->name . "</b> </span>";
        $print .= "<span> Printed Date : <b>" . date('Y m d') . "</b> </span>";
        $print .= "</div>";

        $pdf->loadHTML($print);

        return $pdf->stream();
    }
}
