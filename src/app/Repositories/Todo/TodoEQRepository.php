<?php

namespace App\Repositories\Todo;

use App\Models\Todo;
use App\Http\Requests\Todo\TodoStoreRequest;

class TodoEQRepository implements TodoRepositoryInterface
{
    public function getAllTodos()
    {
        return Todo::all();
    }

    public function getTodoById(int $id)
    {
        return Todo::whereId($id)->first();
    }

    public function storeTodo(string $title, string $description)
    {
    }
}
