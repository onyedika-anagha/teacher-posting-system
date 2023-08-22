@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="/assets/plugins/simple-calendar/simple-calendar.css">
@endsection
@section('content')
    @if (user()->role == 'admin')
        @include('home.admin')
    @else
        @include('home.default')
    @endif
@endsection
@section('scripts')
    <script src="/assets/plugins/simple-calendar/jquery.simple-calendar.js"></script>
    <script src="/assets/js/calander.js"></script>
@endsection
