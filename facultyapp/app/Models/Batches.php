<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batches extends Model
{
    use HasFactory;
    protected $guarded= [];

    public function Courses(){
        return  $this ->belongsTo(Courses::class);
    }
}
