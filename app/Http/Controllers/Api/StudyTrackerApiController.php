<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\StudyTracker;
use Illuminate\Http\Request;

class StudyTrackerApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return StudyTracker::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'user_id' => 'required',
        'subject_name' => 'required',
        'topic' => 'required',
        'hours_required' => 'required|numeric',
    ]);

    $study = \App\Models\StudyTracker::create([
        'user_id' => $request->user_id,
        'subject_name' => $request->subject_name,
        'topic' => $request->topic,
        'description' => $request->description,
        'hours_required' => $request->hours_required,
        'hours_studied' => 0,
        'completion_status' => 'Pending',
        'remarks' => null,
    ]);

    return response()->json([
        'message' => 'Study tracker created successfully',
        'data' => $study
    ]);

    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $study = \App\Models\StudyTracker::find($id);

    if (!$study) {
        return response()->json([
            'message' => 'Record not found'
        ], 404);
    }

    return response()->json($study);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $record = StudyTracker::find($id);

    if (!$record) {
        return response()->json([
            'message' => 'Record not found'
        ], 404);
    }

    $record->update([
        'title' => $request->title,
        'description' => $request->description,
        'status' => $request->status,
    ]);

    return response()->json([
        'message' => 'Record updated successfully',
        'data' => $record
    ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $record = StudyTracker::find($id);

    if (!$record) {
        return response()->json([
            'message' => 'Record not found'
        ], 404);
    }

    $record->delete();

    return response()->json([
        'message' => 'Record deleted successfully'
    ]);
    }
}
