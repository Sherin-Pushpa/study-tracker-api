<!DOCTYPE html>
<html>
<head>
    <title>Student Form</title>
</head>
<body>

    <h2>Student Information Form</h2>

    <form action="{{ route('student.store') }}" method="POST">
    @csrf
        <label>Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Age:</label><br>
        <input type="number" name="age" required><br><br>

        <label>Class:</label><br>
        <input type="text" name="class" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Father Name:</label><br>
        <input type="text" name="father_name" required><br><br>

        <label>Mother Name:</label><br>
        <input type="text" name="mother_name" required><br><br>

        <button type="submit">Submit</button>
    </form>
    <table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Class</th>
        <th>Email</th>
        <th>Father Name</th>
        <th>Mother Name</th>
        <th>Action</th>
    </tr>

    @foreach($students as $student)
    <tr>
        <td>{{ $student->id }}</td>
        <td>{{ $student->name }}</td>
        <td>{{ $student->age }}</td>
        <td>{{ $student->class }}</td>
        <td>{{ $student->email }}</td>
        <td>{{ $student->father_name }}</td>
        <td>{{ $student->mother_name }}</td>
        <td>
            <a href="{{ route('student.edit', $student->id) }}">Edit</a>
            <form action="{{ route('student.delete', $student->id) }}"
              method="POST"
              style="display:inline;"
              onsubmit="return confirm('Are you sure you want to delete this record?');">
             @csrf
             @method('DELETE')

             <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach

</table>

</body>
</html>