@extends('layouts.admin')

@section('content')

<h2 class="mb-4">📝 Assign Task</h2>

<form action="{{ route('study-tracker.store') }}" method="POST">

    @csrf

    <div class="mb-3">
        <label>Student</label>

        <select name="user_id" class="form-control">

            @foreach($students as $student)

                <option value="{{ $student->id }}">
                    {{ $student->name }}
                </option>

            @endforeach

        </select>
    </div>

    <div class="mb-3">
        <label>Subject</label>
        <input type="text" name="subject_name" class="form-control">
    </div>

    <div class="mb-3">
        <label>Topic</label>
        <input type="text" name="topic" class="form-control">
    </div>

    <div class="mb-3">
        <label>Description</label>
        <textarea name="description" class="form-control"></textarea>
    </div>

    <div class="mb-3">
        <label>Required Hours</label>
        <input type="number" name="hours_required" class="form-control">
    </div>

    <button class="btn btn-success">
        Assign Task
    </button>

</form>

@endsection