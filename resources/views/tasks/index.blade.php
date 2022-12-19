<!DOCTYPE html>
<html>
<head>
    <title>Task List</title>
</head>
<body>
<h1>Task List</h1>
<table>
    <thead>
    <a href="/tasks/create">AddNew</a>

    <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($tasks as $task)
    <tr>
        <td>{{ $task->name }}</td>
        <td>{{ $task->description }}</td>
        <td>
            <a href="/tasks/{{ $task->id }}/edit">Edit</a>
            <form action="/tasks/{{ $task->id }}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
