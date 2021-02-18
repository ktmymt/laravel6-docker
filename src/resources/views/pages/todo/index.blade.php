@extends('layouts.default')

@section('content')
    <div>
        @foreach ($todos as $todo)
            <a href="/todo/{{ $todo->id}}">
                <p>{{ $todo->id }} {{ $todo->title }}</p>
            </a>
        @endforeach

        <form action="/todo" method="post" class="todo-form">
            @csrf
            <input type="text" name="title" />
            <textarea name="description"></textarea>
            <button type="submit">submit</button>
        </form>
    </div>
@endsection
