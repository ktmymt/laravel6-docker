<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\Todo\TodoStoreRequest;
use App\Repositories\Todo\TodoRepositoryInterface as TodoRepository;

class TodoController extends Controller
{
    public function __construct(private TodoRepository $todo)
    {
    }

    public function index()
    {
        $todos = $this->todo->getAllTodos();
        return view('pages.todo.top', compact('todos'));
    }

    public function store(TodoStoreRequest $request)
    {
        $input = $request->except('_token');
        $res = $this->todo->storeTodo($input['todo']);

        if ($res) {
            return redirect('/', 301);
        }
    }

    public function show()
    {
        $todo = $this->todo->getTodoById(1);
        return view('pages.todo.show', compact('todo'));
    }
}
