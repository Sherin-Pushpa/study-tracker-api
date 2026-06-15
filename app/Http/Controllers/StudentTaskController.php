<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudyTracker;

class StudentTaskController extends Controller
{
    public function index()
    {
       $tasks = StudyTracker::where('user_id', auth()->id())->get();

        return view('admin.student.tasks', compact('tasks'));
    }

    public function edit(StudyTracker $task)
{
    return view('admin.student.edit', compact('task'));
}

public function update(Request $request, StudyTracker $task)
{
    $task->update([
        'completion_status' => $request->completion_status,
        'remarks' => $request->remarks,
    ]);

    return redirect()
        ->route('student.tasks')
        ->with('success', 'Task updated successfully.');
}
}
