<?php

namespace App\Repositories\Todo;

interface TodoRepositoryInterface
{
    public function getAllTodos();

    public function getTodoById(int $id);

    public function storeTodo(string $title);
}
