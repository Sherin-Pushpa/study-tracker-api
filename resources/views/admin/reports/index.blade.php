@extends('layouts.admin')

@section('content')

<h2 class="mb-4">📊 Reports Dashboard</h2>

<div class="row">

    <div class="col-md-4">
        <div class="card shadow-sm text-center">
            <div class="card-body">
                <h2>{{ $totalStudents }}</h2>
                <p>Total Students</p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card shadow-sm text-center">
            <div class="card-body">
                <h2>{{ $completedTasks }}</h2>
                <p>Completed Tasks</p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card shadow-sm text-center">
            <div class="card-body">
                <h2>{{ $pendingTasks }}</h2>
                <p>Pending Tasks</p>
            </div>
        </div>
    </div>

</div>

<br>

<div class="card shadow-sm">
    <div class="card-header">
        Task Completion Report
    </div>

    <div class="card-body">

        <div style="width:300px; height:300px; margin:auto;">
    <canvas id="taskChart"></canvas>
</div>

    </div>
</div>
<br>

<div class="card shadow-sm mt-4">

    <div class="card-header">
        Tasks Assigned to Each Student
    </div>

    <div class="card-body">

        <canvas id="studentChart" height="100"></canvas>

    </div>

</div>


<script>

const ctx = document.getElementById('taskChart');

new Chart(ctx, {
    type: 'pie',

    data: {
        labels: ['Completed', 'Pending'],

        datasets: [{
            data: [
                {{ $completedTasks }},
                {{ $pendingTasks }}
            ]
        }]
    }

});
const studentCtx = document.getElementById('studentChart');

new Chart(studentCtx, {

    type: 'bar',

    data: {

        labels: [

            @foreach($studentTasks as $student)
                "{{ $student->name }}",
            @endforeach

        ],

        datasets: [{

            label: 'Tasks Assigned',

            data: [

                @foreach($studentTasks as $student)
                    {{ $student->study_trackers_count }},
                @endforeach

            ]

        }]

    },

    options: {

        responsive: true,

        scales: {

            y: {
                beginAtZero: true
            }

        }

    }

});


</script>

@endsection