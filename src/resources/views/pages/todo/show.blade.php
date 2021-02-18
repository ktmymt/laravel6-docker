@extends('layouts.default')

@section('content')
    <div>
        <p>{{ $todo->id }} {{ $todo->title }} </p>
        <p>{{ $todo->description }}</p>
    </div>
@endsection
