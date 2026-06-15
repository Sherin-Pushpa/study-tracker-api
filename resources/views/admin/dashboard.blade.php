@extends('layouts.admin')

@section('content')

<div class="row">

    <div class="col-md-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <h3>{{ $records->count() }}</h3>
                <p>Total Tasks</p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <h3>{{ $records->where('status','Completed')->count() }}</h3>
                <p>Completed</p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <h3>{{ $records->where('status','Pending')->count() }}</h3>
                <p>Pending</p>
            </div>
        </div>
    </div>

</div>

<br>

<div class="card shadow-sm">

    <div class="card-header">
        Recently Added Tasks
    </div>

    <div class="card-body">

        <table class="table">

            <thead>

                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Status</th>
                </tr>

            </thead>

            <tbody>

            @foreach($records as $record)

                <tr>

                    <td>{{ $record->id }}</td>

                    <td>{{ $record->title }}</td>

                    <td>{{ $record->status }}</td>

                </tr>

            @endforeach

            </tbody>

        </table>

    </div>

</div>

@endsection