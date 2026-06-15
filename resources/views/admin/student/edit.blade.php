@extends('layouts.student')

@section('content')

<h2>Update Task</h2>

<form action="{{ route('student.tasks.update',$task->id) }}" method="POST">

    @csrf
    @method('PUT')

    <label>Status</label>

    <select name="completion_status">

        <option value="Pending"
        {{ $task->completion_status=='Pending'?'selected':'' }}>
        Pending
        </option>

        <option value="In Progress"
        {{ $task->completion_status=='In Progress'?'selected':'' }}>
        In Progress
        </option>

        <option value="Completed"
        {{ $task->completion_status=='Completed'?'selected':'' }}>
        Completed
        </option>

    </select>

    <br><br>

    <label>Remarks</label>

    <textarea name="remarks">{{ $task->remarks }}</textarea>

    <br><br>

    <button class="btn btn-success">
        Save
    </button>

</form>

@endsection