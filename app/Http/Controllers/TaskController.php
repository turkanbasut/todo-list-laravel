<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Task listesi görüntüleme yöntemi
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index')->with('tasks', $tasks);
    }

    public function create()
    {
        return view('tasks.create');
    }


    public function store(Request $request)
    {
        $task = new Task;
        $task->name = $request->input('name');
        $task->description = $request->input('description');
        $task->save();

        return redirect('/')->with('success', 'Task added successfully!');
    }

    public function edit($id)
    {
        // Find the task with the given id
        $task = Task::find($id);

        // Return the edit view with the task information
        return view('tasks.edit', ['task' => $task]);
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'nullable',
        ]);

        // Find the task with the given id and update its information
        $task = Task::find($id);
        $task->name = $request->input('name');
        $task->description = $request->input('description');
        $task->save();

        // Redirect to the task list page with a success message
        return redirect('/')->with('success', 'Task updated successfully');
    }


// Task silme yöntemi
    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();

        return redirect('/tasks')->with('success', 'Task deleted successfully!');
    }


}
