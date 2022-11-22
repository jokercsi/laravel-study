@extends('layouts.default')

@section('title','photoUpload')
@section('content')
    <!-- 완료 메시지 -->
    @if(session()->has('success'))
        <p>{{ session('success') }}</p>
    @endif
    <form action="{{ route('photos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>photo: <input type="file" name="image"></label>
        <button type="submit">upload</button>
    </form>
@endsection
