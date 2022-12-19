<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
</head>
<body>
<h1>Edit Task</h1>
{!! Form::open(['action' => ['TaskController@update', $task->id], 'method' => 'POST']) !!}
{{ Form::label('name', 'name') }}
{{ Form::text('name', $task->name, ['placeholder' => 'Task name']) }}
{{ Form::label('description', 'Description') }}
{{ Form::textarea('description', $task->description, ['placeholder' => 'Task Description']) }}
{{ Form::submit('Submit') }}
{!! Form::close() !!}
</body>
</html>
