@extends('layouts.admin')

@section('content')

<h2 class="mb-4">👨‍🎓 Students</h2>

<table class="table table-bordered">

    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
    </thead>

    <tbody>

    @forelse($students as $student)

        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
        </tr>

    @empty

        <tr>
            <td colspan="3" class="text-center">
                No students found.
            </td>
        </tr>

    @endforelse

    </tbody>

</table>

@endsection