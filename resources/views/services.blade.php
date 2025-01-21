@extends('layouts.landing')
@section('title', 'Services')

@section('content')
    <h1>Our Services</h1>

    @component('_components.card')
        @slot('title')
            Service 1
        @endslot

        @slot('content')
            This is the content for service 1
        @endslot

    @endcomponent

    @component('_components.card')
        @slot('title', 'Service 2')

        @slot('content', 'This is the content for service 2')

    @endcomponent

@endsection
