<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return view('tasks.index')->with('tasks', Task::all());
    }

    public function store(Request $request)
    {
        $task = Task::create($request->only(['title', 'description']));

         return response($task);
    }
}
