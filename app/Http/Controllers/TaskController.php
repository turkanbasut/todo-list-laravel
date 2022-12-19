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

        return redirect('/tasks')->with('success', 'Task added successfully!');
    }

    // Task güncelleme yöntemi
    public function update(Request $request, $id)
    {
        $task = Task::find($id);
        $task->name = $request->input('name');
        $task->description = $request->input('description');
        $task->save();

        return redirect('/tasks')->with('success', 'Task updated successfully!');
    }

// Task silme yöntemi
    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();

        return redirect('/tasks')->with('success', 'Task deleted successfully!');
    }


}
