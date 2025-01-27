@extends('layouts.app')

@section('content')
    <h1>投稿を編集</h1>

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

    <!-- Edit Post Form -->
    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="title">タイトル</label>
        <input type="text" id="title" name="title" value="{{ old('title', $post->title) }}">
        @error('title')
            <div style="color: red;">{{ $message }}</div>
        @enderror

        <label for="content">内容</label>
        <textarea id="content" name="content">{{ old('content', $post->content) }}</textarea>
        @error('content')
            <div style="color: red;">{{ $message }}</div>
        @enderror

        <button type="submit">更新する</button>
    </form>
@endsection
