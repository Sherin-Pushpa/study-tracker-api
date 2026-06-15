<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class StudyTracker extends Model
{
     protected $fillable = [
    'user_id',
    'subject_name',
    'topic',
    'description',
    'hours_required',
    'hours_studied',
    'completion_status',
    'remarks',
];
public function user()
{
    return $this->belongsTo(User::class);
}

}
