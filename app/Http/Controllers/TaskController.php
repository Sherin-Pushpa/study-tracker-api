<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\StudentTaskController;
use App\Models\Task;
use App\Models\User;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::with('student')->get();
        return view('admin.tasks.index', compact('tasks'));
    }

    public function create()
    {
        $students = User::where('role', 'student')->get();
        return view('admin.tasks.create', compact('students'));
    }

    public function store(Request $request)
    {
        Task::create([
            'subject' => $request->subject,
            'topic' => $request->topic,
            'description' => $request->description,
            'hours_required' => $request->hours_required,
            'assigned_to' => $request->assigned_to,
            'created_by' => auth()->id(),
        ]);

        return redirect('/admin/tasks')->with('success', 'Task created successfully!');
    }
}
