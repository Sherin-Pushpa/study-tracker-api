<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'subject',
        'topic',
        'description',
        'hours_required',
        'assigned_to',
        'created_by'
    ];
    public function student()
{
    return $this->belongsTo(User::class, 'assigned_to');
}
}
