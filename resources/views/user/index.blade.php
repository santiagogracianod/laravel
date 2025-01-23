@extends('layouts.landing')

@section('title', 'Users')

@section('content')
    <h1>Users list</h1>
    <ul>
        @if (count($users) === 0)
            <h4>No users found</h4>
        @else
            @foreach ($users as $user)
                <li>{{ $user->name }} -- {{ $user->age }} years old</li>
            @endforeach

        @endif
    </ul>


@endsection
