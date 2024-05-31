<!DOCTYPE html>
<html>
<head>
    <title>Tasks by Date and Time</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1 class="mt-5">Tasks by Date and Time</h1>
    <a href="{{ route('tasks.index') }}" class="btn btn-primary mb-3">Back to To-Do List</a>
    <ul class="list-group">
        @foreach ($tasks as $task)
            <li class="list-group-item">
                {{ $task->name }} - <small>{{ $task->created_at }}</small>
            </li>
        @endforeach
    </ul>
</div>
</body>
</html>
