<?php

namespace App\Repositories\Todo;

use App\Models\Todo;
use App\Http\Requests\Todo\TodoStoreRequest;

class TodoQBRepository implements TodoRepositoryInterface
{
    public function __construct(private Todo $todo)
    {
    }

    public function getAllTodos()
    {
        return $this->todo->get();
    }

    public function getTodoById(int $id)
    {
        return $this->todo->whereId($id)->first();
    }

    public function storeTodo(string $title, string $description)
    {
        try {
            $now = \Carbon\Carbon::now();
            $this->todo->insert([
                'title' => $title,
                'description' => $description,
                'status' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ]);
            return true;
        } catch (\Exception $e) {
            return $e;
        }
    }
}
