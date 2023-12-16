<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\auth;
use App\Models\Batches;
use Illuminate\Http\Request;

class BatchController extends Controller
{
    public function AllBatches (){
        $batches = Batches::latest()->get();

        return  view ('batch.all_batches',compact('batches'));
    }

    public function Addbatch (){

        return view('batch.add_batch');
    }
    public function StoreBatch(Request $request){

        //validate

        $request->validate([
            'batch_code'=>'required'
        ]);

        Batches::insert([

            'batch_code'=>$request->batch_code,
            'course_name'=>$request->course_name,
            'start_date' =>$request->start_date,
            'end_date' =>$request->end_date,

        ]);

        return redirect()->route('all.batches');
    }
}
