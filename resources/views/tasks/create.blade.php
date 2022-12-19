<!DOCTYPE html>
<html>
<head>
    <title>Add Task</title>
</head>
<body>
<h1>Add Task</h1>
{!! Form::open(['action' => 'TaskController@store', 'method' => 'POST']) !!}
{{ Form::label('name', 'name') }}
{{ Form::text('name', '', ['placeholder' => 'Task name']) }}
{{ Form::label('description', 'Description') }}
{{ Form::textarea('description', '', ['placeholder' => 'Task Description']) }}
{{ Form::submit('Submit') }}
{!! Form::close() !!}
</body>
</html>
