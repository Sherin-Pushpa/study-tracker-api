@extends('layouts.admin')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>📚 Assigned Tasks</h2>

    <a href="{{ route('study-tracker.create') }}" class="btn btn-primary">
        + Assign New Task
    </a>
</div>

<div class="row mb-4">

    <div class="col-md-3">
        <div class="card shadow-sm">
            <div class="card-body">
                <h3>{{ $totalSubjects }}</h3>
                <p>Total Tasks</p>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card shadow-sm">
            <div class="card-body">
                <h3>{{ $completedCount }}</h3>
                <p>Completed</p>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card shadow-sm">
            <div class="card-body">
                <h3>{{ $pendingCount }}</h3>
                <p>Pending</p>
            </div>
        </div>
    </div>

</div>

<table class="table table-bordered">

    <thead class="table-dark">
        <tr>
            <th>Student</th>
            <th>Subject</th>
            <th>Topic</th>
            <th>Required Hours</th>
            <th>Status</th>
        </tr>
    </thead>

    <tbody>

    @forelse($records as $record)

        <tr>
            <td>{{ $record->user->name ?? 'N/A' }}</td>
            <td>{{ $record->subject_name }}</td>
            <td>{{ $record->topic }}</td>
            <td>{{ $record->hours_required }}</td>
            <td>{{ $record->completion_status }}</td>
        </tr>

    @empty

        <tr>
            <td colspan="5" class="text-center">
                No tasks assigned yet.
            </td>
        </tr>

    @endforelse

    </tbody>

</table>

@endsection