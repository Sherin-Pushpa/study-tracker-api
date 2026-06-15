@extends('layouts.admin')

@section('content')

<h2>Student Dashboard</h2>

<div class="card">
    <div class="card-body">
        <h4>Welcome, {{ auth()->user()->name }}</h4>

        <p>This is your student dashboard.</p>

        <a href="{{ route('student.tasks') }}" class="btn btn-primary">
            View My Tasks
        </a>
    </div>
</div>

@endsection