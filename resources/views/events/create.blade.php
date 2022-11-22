@extends('layouts.default')

@section('title', 'event register')
@section('content')
    <form action="{{ route('events.store') }}" method="POST" >
        @csrf
        <label>event name: <input type="text" name="title"> </label>
        <button type="submit">register</button>
    </form>
@endsection