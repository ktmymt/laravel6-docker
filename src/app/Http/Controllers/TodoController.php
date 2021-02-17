<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\Todo\TodoRepositoryInterface as TodoRepository;

class TodoController extends Controller
{
    public function __construct(private TodoRepository $todo)
    {
    }

    public function index()
    {
        $data = $this->todo->getTodoById(1);
        var_dump($data);
        return view('pages.top');
    }

    public function store()
    {
    }
}
