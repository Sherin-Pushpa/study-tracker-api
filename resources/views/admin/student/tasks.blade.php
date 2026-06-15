@extends('layouts.student')

@section('content')

<h2>My Tasks</h2>

<table class="table table-bordered">

    <thead>
        <tr>
            <th>Subject</th>
            <th>Topic</th>
            <th>Hours</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>

    @forelse($tasks as $task)

        <tr>
            <td>{{ $task->subject_name }}</td>
            <td>{{ $task->topic }}</td>
            <td>{{ $task->hours_required }}</td>
            <td>{{ $task->completion_status }}</td>
            <td>
    <a href="{{ route('student.tasks.edit', $task->id) }}"
       class="btn btn-warning btn-sm">
        Update
    </a>
</td>
        </tr>

    @empty

        <tr>
            <td colspan="4">No tasks assigned.</td>
        </tr>

    @endforelse

    </tbody>

</table>

@endsection