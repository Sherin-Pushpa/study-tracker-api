<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study Tracker Admin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            margin:0;
            background:#f4f6f9;
            font-family:Arial, Helvetica, sans-serif;
        }

        .sidebar{
            width:250px;
            height:100vh;
            position:fixed;
            left:0;
            top:0;
            background:#1e3a8a;
            color:white;
        }

        .logo{
            padding:25px;
            font-size:24px;
            font-weight:bold;
            border-bottom:1px solid rgba(255,255,255,.2);
        }

        .menu{
            padding:15px;
        }

        .menu a{
            display:block;
            color:white;
            text-decoration:none;
            padding:12px 15px;
            border-radius:8px;
            margin-bottom:8px;
        }

        .menu a:hover{
            background:#3657c5;
        }

        .content{
            margin-left:250px;
            padding:30px;
        }

        .topbar{
            background:white;
            padding:18px 25px;
            border-radius:10px;
            box-shadow:0 2px 10px rgba(0,0,0,.08);
            margin-bottom:25px;
        }
    </style>

</head>

<body>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script> 

<div class="sidebar">

    <div class="logo">
        📚 Study Tracker
    </div>

    <div class="menu">

        <a href="{{ route('admin.dashboard') }}">🏠 Dashboard</a>

        <a href="{{ route('study-tracker.create') }}">📝 Assign Task</a>

        <a href="{{ route('admin.students') }}">👨‍🎓 Students</a>

        <a href="{{ route('admin.remarks') }}">💬 Remarks</a>

        <a href="{{ route('admin.reports') }}">📊 Reports</a>

        <hr>

        <form action="{{ route('logout') }}" method="POST">
            @csrf

            <button class="btn btn-danger w-100">
                🚪 Logout
            </button>

        </form>

    </div>

</div>

<div class="content">

    <div class="topbar">

        <h4>Welcome, {{ auth()->user()->name }} 👋</h4>

    </div>

    @yield('content')

</div>

</body>
</html>