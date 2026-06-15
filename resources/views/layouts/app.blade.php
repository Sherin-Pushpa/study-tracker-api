<!DOCTYPE html>
<html>
<head>
    <title>Study Tracker</title>
    <style>
        body {
            margin: 0;
            font-family: Arial;
            display: flex;
        }

        .sidebar {
            width: 220px;
            background: #111;
            color: white;
            height: 100vh;
            padding: 20px;
        }

        .sidebar a {
            display: block;
            color: white;
            text-decoration: none;
            margin: 15px 0;
        }

        .main {
            flex: 1;
            padding: 20px;
            background: #f4f6f9;
        }
    </style>
</head>

<body>

    <div class="sidebar">

        <h3>Study Tracker</h3>

        @if(auth()->user()->role == 'admin')
            <a href="/admin/tasks">Tasks</a>
            <a href="/admin/students">Students</a>
        @else
            <a href="/student/tasks">My Tasks</a>
            <a href="/student/remarks">Remarks</a>
        @endif

        <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button>
</form>
    </div>

    <div class="main">
        @yield('content')
    </div>

</body>
</html>