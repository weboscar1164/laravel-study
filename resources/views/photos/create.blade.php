@extends('layouts.default')

@section('title', '画像アップロード')
@section('content')
@if(session()->has('success'))
    <p>{{ session('success') }}</p>
@endif
    <form action="{{ route('photo.store') }}" method="POST" enctype="multipart/form-data">
        @CSRF
        <label>画像： <input type="file" name="image"></label>
        <button type="submit">アップロード</button>
    </form>
@endsection