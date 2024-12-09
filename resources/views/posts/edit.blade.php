@extends('layouts.app')

@section('content')
    <h1>投稿を編集</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="title">タイトル</label>
        <input type="text" id="title" name="title" value="{{ old('title', $post->title) }}" required>

        <label for="content">内容</label>
        <textarea id="content" name="content" required>{{ old('content', $post->content) }}</textarea>

        <button type="submit">更新する</button>
    </form>
@endsection
