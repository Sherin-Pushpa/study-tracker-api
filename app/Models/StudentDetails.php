<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentDetails extends Model
{
    
        protected $fillable=[
        'name',
        'age',
        'class',
        'email',
        'father_name',
        'mother_name',
    ];
}
