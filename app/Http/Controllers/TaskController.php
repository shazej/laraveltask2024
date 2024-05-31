<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        Task::create($request->all());

        return redirect()->route('tasks.index');
    }

    public function update(Request $request, Task $task)
    {
        $task->update(['completed' => $request->has('completed')]);

        return redirect()->route('tasks.index');
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->route('tasks.index');
    }
    public function tasksByDate()
    {
        $tasks = Task::orderBy('created_at', 'desc')->get();
        return view('tasks.by_date', compact('tasks'));
    }
}
