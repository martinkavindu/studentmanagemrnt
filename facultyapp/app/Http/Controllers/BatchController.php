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

}
