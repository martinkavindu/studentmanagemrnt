<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollments extends Model
{
    use HasFactory;
    protected $guarded= [];

    
   public function Batches(){
       return $this ->belongsTo(Batches::class);
   }
   
}
