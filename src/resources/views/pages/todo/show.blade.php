@extends('layouts.default')

@section('content')
    <div>
        <p>{{ $todo->id }} {{ $todo->title }} </p>
    </div>
@endsection
