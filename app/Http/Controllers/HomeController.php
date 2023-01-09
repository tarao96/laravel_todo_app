<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Task;

class HomeController extends Controller
{
    public function index() {
        $tasks = Task::all();

        return view('home', ['tasks' => $tasks]);
    }

    public function store(Request $request) {
        $task = new Task();
        $task->title = $request->title;
        $task->body = $request->body;
        $task->save();

        return redirect()->route('task.index');
    }

    public function show($id) {
        $task = Task::find($id);
        return view('show', ['task' => $task]);
    }

    public function edit($id) {
        $task = Task::find($id);
        return view('edit', ['task' => $task]);
    }

    public function update(Request $request, $id) {
        $task = Task::find($id);
        $task->title = $request->title;
        $task->body = $request->body;
        $task->save();

        return redirect()->route('task.index');
    }

    public function delete($id) {
        $task = Task::find($id);
        $task->delete();

        return redirect()->route('task.index');
    }
}
