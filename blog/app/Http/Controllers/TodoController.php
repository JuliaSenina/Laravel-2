<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::paginate();

        return view(
            'todo_tasks',
            [
                'todos' => $todos
            ]
        );
    }

    public function create()
    {
        Todo::create([
            'title' => 'Новая задача',
            'description' => 'Описание задачи ...',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        return redirect()->back();
    }

    public function find($id)
    {
        $todo = Todo::find($id);
        return view(
            'todoItem',
            [
                'todo' => $todo
            ]
        );
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Todo $todo)
    {
        //
    }

    public function edit(Todo $todo)
    {
        //
    }

    public function update(Request $request, Todo $todo)
    {
        //
    }

    public function destroy(Todo $todo)
    {
        //
    }
}
