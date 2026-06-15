<!DOCTYPE html>
<html>
<head>
<title>Edit Study Tracker</title>

<style>
body {
    font-family: Arial;
    background: #d1ddee;
    margin: 0;
    padding: 20px;
}

.container {
    width: 450px;
    margin: auto;
    background: white;
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0 2px 12px rgba(0,0,0,0.1);
}

h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

input, select {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 6px;
    outline: none;
}

input:focus, select:focus {
    border-color: #007bff;
}

button {
    width: 100%;
    padding: 10px;
    background: #007bff;
    border: none;
    color: white;
    border-radius: 6px;
    cursor: pointer;
    font-size: 16px;
}

button:hover {
    background: #14c443;
}

.back {
    display: block;
    text-align: center;
    margin-top: 10px;
    text-decoration: none;
    color: #555;
}

.back:hover {
    color: black;
}
</style>

</head>
<body>

<div class="container">

    <h2>Edit Study Tracker</h2>

    <form action="{{ route('study-trackers.update', $study_tracker->id) }}" method="POST">
        @csrf
        @method('PUT')

        <input
            type="text"
            name="subject_name"
            value="{{ $study_tracker->subject_name }}"
            required
        >

        <input
            type="text"
            name="topic"
            value="{{ $study_tracker->topic }}"
            required
        >

        <select name="completion_status">
            <option value="Pending" {{ $study_tracker->status == 'Pending' ? 'selected' : '' }}>
                Pending
            </option>
            <option value="Completed" {{ $study_tracker->status == 'Completed' ? 'selected' : '' }}>
                Completed
            </option>
        </select>

        <input
            type="number"
            name="hours_studied"
            value="{{ $study_tracker->hours_studied }}"
            required
        >

        <button type="submit">Update</button>
    </form>

    <a href="{{ route('study-trackers.index') }}" class="back">
        <button>← Back to List</button>
    </a>

</div>

</body>
</html>