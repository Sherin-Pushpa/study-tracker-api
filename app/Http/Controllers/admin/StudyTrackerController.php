<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\StudyTracker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class StudyTrackerController extends Controller
{
    public function index(Request $request)
{
    $query = StudyTracker::query();

    if ($request->status) {
        $query->where('completion_status', $request->status);
    }

    $records = $query->get();

    $totalSubjects = $records->count();
    $completedCount = $records->where('completion_status', 'Completed')->count();
    $pendingCount = $records->where('completion_status', 'Pending')->count();
    $totalHours = $records->sum('hours_studied');

    return view('admin.tasks.index', compact(
        'records',
        'totalSubjects',
        'completedCount',
        'pendingCount',
        'totalHours'
    ));
}
    public function create()
    {

    $students = User::where('role', 'student')->get();

    return view('admin.tasks.create', compact('students'));

    }

    public function store(Request $request)
    {
        $request->validate([
        'user_id' => 'required',
        'subject_name' => 'required|max:255',
        'topic' => 'required|max:255',
        'description' => 'nullable',
        'hours_required' => 'required|numeric|min:1',
    ]);

    DB::beginTransaction();

    try {

        StudyTracker::create([
            'user_id' => $request->user_id,
            'subject_name' => $request->subject_name,
            'topic' => $request->topic,
            'description' => $request->description,
            'hours_required' => $request->hours_required,

            // Student updates these later
            'hours_studied' => 0,
            'completion_status' => 'Pending',
            'remarks' => null,
        ]);

        DB::commit();

        return redirect()
            ->route('admin.dashboard')
            ->with('success', 'Task assigned successfully.');

    } catch (\Exception $e) {

        DB::rollBack();

        return back()->with('error', $e->getMessage());
    }
       
    }

    public function edit(StudyTracker $study_tracker)
    {
        return view('study-trackers.edit', compact('study_tracker'));
    }

    public function update(Request $request, StudyTracker $study_tracker)
    {
        DB::beginTransaction();

    try {

        $study_tracker->update($request->all());

        DB::commit();

        return redirect()
            ->route('study-tracker.index')
            ->with('success', 'Record updated successfully');

    } catch (\Exception $e) {

        DB::rollBack();

        return back()
            ->with('error', 'Failed to update record');
    }
    }

    public function destroy(StudyTracker $study_tracker)
    {
        DB::beginTransaction();

    try {

        $study_tracker->delete();

        DB::commit();

        return redirect()
            ->route('study-tracker.index')
            ->with('success', 'Record deleted successfully');

    } catch (\Exception $e) {

        DB::rollBack();

        return back()
            ->with('error', 'Failed to delete record');
    }
    }

    public function students()
{
    $students = User::where('role', 'student')->get();

    return view('admin.student.index', compact('students'));
}
 
    public function remarks()
{
    $records = StudyTracker::with('user')
                ->whereNotNull('remarks')
                ->get();

    return view('admin.remarks.index', compact('records'));
}
    public function reports()
{
    $totalStudents = User::where('role', 'student')->count();

    $completedTasks = StudyTracker::where('completion_status', 'Completed')->count();

    $pendingTasks = StudyTracker::where('completion_status', 'Pending')->count();

    // Tasks assigned to each student
    $studentTasks = User::where('role', 'student')
        ->withCount('studyTrackers')
        ->get();

    return view('admin.reports.index', compact(
        'totalStudents',
        'completedTasks',
        'pendingTasks',
        'studentTasks'
    ));
}
}