@extends('layouts.default')

@section('content')
    <div>
        @foreach ($todos as $todo)
           <p>{{ $todo->id }} {{ $todo->title }} </p>
        @endforeach

        <form action="/todo" method="post">
            @csrf
            <input type="text" name="todo" />
            <button type="submit">submit</button>
        </form>
    </div>
@endsection
