<!DOCTYPE html>
<html>
<head>
    <title>Add Task</title>
</head>
<body>
<div class="container">

    <h1>Add Task</h1>
    {!! Form::open(['action' => 'TaskController@store', 'method' => 'POST']) !!}
    {{ Form::label('name', 'name') }}
    {{ Form::text('name', '', ['placeholder' => 'Task name']) }}
    {{ Form::label('description', 'Description') }}
    {{ Form::text('description', '', ['placeholder' => 'Task Description']) }}
    {{ Form::submit('Submit') }}
    {!! Form::close() !!}
</div>

</body>
</html>

<style>
    html,
    body {
        height: 100%;
    }
    body {
        margin: 0;
        background: linear-gradient(45deg, #49a09d, #5f2c82);
        font-family: sans-serif;
        font-weight: 100;
    }
    .container {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }


</style>
