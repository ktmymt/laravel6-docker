<?php

namespace App\Repositories\Todo;

use App\Models\Todo;

class TodoRepository implements TodoRepositoryInterface
{
    public function __construct(protected Todo $todo)
    {
    }

    public function getAllTodos()
    {
        return $this->todo->get();
    }

    public function getTodoById(int $id)
    {
        return $this->todo->whereId($id)->get();
    }
}
