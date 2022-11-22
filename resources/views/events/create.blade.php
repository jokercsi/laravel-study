@extends('layouts.default')

@section('title', 'event register')
@section('content')
    @if(session()->has('success'))
        <p>{{ session('success') }}</p>
    @endif
    <form action="{{ route('events.store') }}" method="POST" >
        @csrf
        <label>event name: <input type="text" name="title"> </label>
        <button type="submit">register</button>
    </form>
@endsection