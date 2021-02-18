<?php

namespace App\Http\Controllers;

use App\Http\Requests\Todo\TodoStoreRequest;
use App\Repositories\Todo\TodoRepositoryInterface as TodoRepository;
use App\Services\TodoService;

class TodoController extends Controller
{
    public function __construct(private TodoRepository $todoRepository, private TodoService $todoSearvice)
    {
    }

    public function index()
    {
        $todos = $this->todoRepository->getAllTodos();
        return view('pages.todo.index', compact('todos'));
    }

    public function store(TodoStoreRequest $request)
    {
        $input = $request->except('_token');
        $res = $this->todoRepository->storeTodo($input['title'], $input['description']);

        if ($res) {
            return redirect('/');
        }
    }

    public function show(int $id)
    {
        $todo = $this->todoRepository->getTodoById($id);
        return view('pages.todo.show', compact('todo'));
    }
}
