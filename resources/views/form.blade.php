@extends('layouts.default')

@section('title', 'GET form')
@section('content')
    <form action="/query-strings" method="GET">
        <label>keyword: <input type="text" name="keyword"></label>
        <button type="submit">sent</button>
    </form>
@endsection