@extends('layouts.default')

@section('title','uploadedPhotoShow')
@section('content')
    <!-- 완료 메시지 -->
    @if(session()->has('success'))
        <p>{{ session('success') }}</p>
    @endif

    <img src="{{ asset('storage/photos/'. $fileName) }}" alt = "">
@endsection
