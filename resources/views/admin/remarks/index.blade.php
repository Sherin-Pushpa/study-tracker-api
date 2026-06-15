@extends('layouts.admin')

@section('content')

<h2 class="mb-4">💬 Student Remarks</h2>

<table class="table table-bordered">

    <thead class="table-dark">
        <tr>
            <th>Student</th>
            <th>Subject</th>
            <th>Topic</th>
            <th>Status</th>
            <th>Remarks</th>
        </tr>
    </thead>

    <tbody>

    @forelse($records as $record)

        <tr>
            <td>{{ $record->user->name }}</td>
            <td>{{ $record->subject_name }}</td>
            <td>{{ $record->topic }}</td>
            <td>{{ $record->completion_status }}</td>
            <td>{{ $record->remarks }}</td>
        </tr>

    @empty

        <tr>
            <td colspan="5" class="text-center">
                No remarks available.
            </td>
        </tr>

    @endforelse

    </tbody>

</table>

@endsection