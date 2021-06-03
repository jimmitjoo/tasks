<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Support\Facades\Validator;

class TasksController extends Controller
{
    public function index()
    {
        return Task::all();
    }

    public function store()
    {
        $data = Validator::validate(request()->all(), [
            'name' => 'required',
        ]);

        return Task::create($data);
    }

    public function update(Task $task)
    {
        foreach (\request()->all() as $key => $value) {
            $task->{$key} = $value;
        }
        $task->save();
    }

    public function destroy(Task $task)
    {
        $task->delete();
    }

    public function complete(Task $task)
    {
        $task->complete = true;
        $task->save();
    }
}
