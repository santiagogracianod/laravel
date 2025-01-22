@extends('layouts.landing')

@section('title', 'Users')

@section('content')
    <h1>Users list</h1>
    <ul>
        @if ($users->isEmpty())
            <h4>No users found</h4>
        @else
            @foreach ($users as $user)
                <li>{{ $user->name }}</li>
            @endforeach

        @endif
    </ul>


@endsection
