<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;

class StaffController extends Controller
{
    public function teacher()
    {
        return view('admin.teacher');
    }
}
