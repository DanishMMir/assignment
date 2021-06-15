@extends('layout')
@section('content')
    <div class="text-center mb-4">
        @include('flash-message')
        <h1 class="h3 mb-3 font-weight-normal">Properties API Integration</h1>
        <p>Get data from API and store it in database.</p>
        <p>You can also do this via CLI using command</p>
        <p><code>php artisan properties:get</code></p>
        <p>You can also schedule this command via cron</p>
{{--        TODO: fetch properties in AJAX call--}}
        <a class="btn btn-lg btn-primary btn-block" href="{{ route('get-properties') }}">Get Properties Data</a>
    </div>
@endsection
