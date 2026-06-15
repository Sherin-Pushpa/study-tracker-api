<!DOCTYPE html>
<html>
<head>
    <title>Student Dashboard</title>
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

<div class="sidebar">

    <div class="logo">
        📚 Student Panel
    </div>

    <div class="menu">
        <a href="{{ route('student.dashboard') }}">🏠 Dashboard</a>
        <a href="{{ route('student.tasks') }}">📚 My Tasks</a>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="btn btn-danger w-100">Logout</button>
        </form>
    </div>

</div>

<div class="content">
    @yield('content')
</div>

</body>
</html>