@extends('layouts.app')

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>

    <h2>コメント</h2>
    <!-- Display all comments -->
    @if ($post->comments->count())
        <ul>
            @foreach ($post->comments as $comment)
                <li>
                    <strong>{{ $comment->author }}</strong>: {{ $comment->content }}
                    <form action="{{ route('posts.comments.destroy', [$post, $comment]) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">コメントを削除</button>
                    </form>
                </li>
            @endforeach
        </ul>
    @else
        <p>まだコメントはありません。</p>
    @endif

    <!-- Add Comment Form -->
    <h3>コメントを追加</h3>
    <form action="{{ route('posts.comments.store', $post) }}" method="POST">
        @csrf
        <label for="author">名前:</label>
        <input type="text" id="author" name="author">
        @error('author')
            <div style="color: red;">{{ $message }}</div>
        @enderror

        <label for="content">内容:</label>
        <textarea id="content" name="content"></textarea>
        @error('content')
            <div style="color: red;">{{ $message }}</div>
        @enderror

        <button type="submit">コメントを投稿</button>
    </form>

    <a href="{{ route('posts.index') }}">戻る</a>
@endsection
