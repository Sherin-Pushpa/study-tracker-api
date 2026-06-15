<form action="{{ route('student.update', $student->id) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $student->name }}">
    <input type="number" name="age" value="{{ $student->age }}">
    <input type="text" name="class" value="{{ $student->class }}">
    <input type="email" name="email" value="{{ $student->email }}">
    <input type="text" name="father_name" value="{{ $student->father_name }}">
    <input type="text" name="mother_name" value="{{ $student->mother_name }}">

    <button type="submit">Update</button>
</form>