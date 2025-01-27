@extends('layouts.app')

@section('content')
    <h1>新しい投稿を作成</h1>

    <!-- Validation errors display -->
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Create Post Form -->
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label for="title">タイトル</label>
        <input type="text" id="title" name="title" value="{{ old('title') }}">
        @error('title')
            <div style="color: red;">{{ $message }}</div>
        @enderror

        <label for="content">内容</label>
        <textarea id="content" name="content">{{ old('content') }}</textarea>
        @error('content')
            <div style="color: red;">{{ $message }}</div>
        @enderror

        <button type="submit">投稿する</button>
    </form>
@endsection
